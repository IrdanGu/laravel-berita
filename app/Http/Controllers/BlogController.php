<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
// [PERBAIKAN] Gunakan Facade yang benar dari Intervention Image
use Intervention\Image\Laravel\Facades\Image;

class BlogController extends Controller
{
    // app/Http/Controllers/BlogController.php

    public function index()
    {

        // DENGAN baris ini:
        $artikels = Blog::with('user')->latest()->paginate(10); // Menambahkan paginasi (misal: 10 item per halaman)

        return view('admin.blog.index', compact('artikels'));
    }

    # Halaman Create
    public function create()
    {
        return view('admin.blog.create');
    }

    # Fungsi Store
    public function store(Request $request)
    {
        // [PERBAIKAN] Aturan validasi diperbarui
        $rules = [
            'judul' => 'required|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048', // max:2048 untuk 2MB
            'desc' => 'required|min:20',
        ];

        // [PERBAIKAN] Pesan error disesuaikan untuk setiap input
        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Gambar utama wajib diunggah!',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'desc.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $imageName = null;
        // [LOGIKA BARU DARI ARTIKEL] Memproses gambar utama (cover)
        if ($request->hasFile('image')) {
            // 1. Buat nama file yang unik
            $imageName = time() . '_' . Str::slug($request->file('image')->getClientOriginalName()) . '.' . $request->file('image')->getClientOriginalExtension();

            // 2. Tentukan path penyimpanan
            $path = 'public/artikel/';
            $pathThumbnail = 'public/artikel/thumbnail/';

            // Pastikan direktori ada
            Storage::makeDirectory($path);
            Storage::makeDirectory($pathThumbnail);

            // 3. Buat dan simpan gambar utama (misal, lebar maks 1200px)
            $image = Image::read($request->file('image'));
            $image->resize(1200, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            Storage::put($path . $imageName, (string) $image->encode());

            // 4. Buat dan simpan thumbnail (misal, lebar 300px)
            $image->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            Storage::put($pathThumbnail . $imageName, (string) $image->encode());
        }

        // [LOGIKA LAMA DIPERTAHANKAN & DIPERBAIKI] Memproses gambar dari dalam deskripsi (rich text editor)
        $desc = $request->desc;
        $dom = new \DOMDocument();
        // [PERBAIKAN] Menambahkan encoding agar karakter non-latin tidak rusak
        libxml_use_internal_errors(true);
        $dom->loadHTML(mb_convert_encoding($desc, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            // Cek jika src adalah base64 data
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid() . '.' . $mimetype;

                // Simpan gambar dari base64 ke storage
                Storage::put('public/artikel/content/' . $fileNameContent, file_get_contents($src));

                // Ganti src dari base64 menjadi URL publik
                $new_src = Storage::url('public/artikel/content/' . $fileNameContent);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-fluid'); // Bootstrap 5 class
            }
        }

        // [PERBAIKAN] Simpan hanya konten dari <body>
        $cleaned_desc = $dom->saveHTML($dom->getElementsByTagName('body')[0]);

        // Simpan data ke database
        Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $imageName,
            'desc' => $cleaned_desc,
        ]);

        return redirect()->route('blog')->with('success', 'Data berhasil disimpan!');
    }

    # Halaman Edit
    public function edit($id) // [PERBAIKAN] Menggunakan Route Model Binding
    {
        $artikel = Blog::find($id); // [PERBAIKAN] Menggunakan findOrFail untuk menangani jika ID tidak ditemukan
        return view('admin.blog.edit', [
            'artikel' => $artikel,
        ]);
    }

    # Fungsi Update
    public function update(Request $request, $id)
    {
        $artikel = Blog::findOrFail($id);

        // [PERBAIKAN] Aturan validasi diperbarui - konsisten dengan fungsi store
        $rules = [
            'judul' => 'required|max:255',
            'desc' => 'required|min:20',
        ];

        // [PERBAIKAN] Tambahkan validasi gambar hanya jika ada file baru
        if ($request->hasFile('image')) {
            $rules['image'] = 'required|image|mimes:jpg,jpeg,png,webp|max:2048'; // max:2048 untuk 2MB
        }

        // [PERBAIKAN] Pesan error disesuaikan untuk setiap input
        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Gambar utama wajib diunggah!',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'desc.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $imageName = $artikel->image; // Default gunakan gambar lama

        // [LOGIKA BARU DARI ARTIKEL] Memproses gambar utama (cover) jika ada file baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($artikel->image) {
                Storage::delete('public/artikel/' . $artikel->image);
                Storage::delete('public/artikel/thumbnail/' . $artikel->image);
            }

            // 1. Buat nama file yang unik
            $imageName = time() . '_' . Str::slug($request->file('image')->getClientOriginalName()) . '.' . $request->file('image')->getClientOriginalExtension();

            // 2. Tentukan path penyimpanan
            $path = 'public/artikel/';
            $pathThumbnail = 'public/artikel/thumbnail/';

            // Pastikan direktori ada
            Storage::makeDirectory($path);
            Storage::makeDirectory($pathThumbnail);

            // 3. Buat dan simpan gambar utama (misal, lebar maks 1200px)
            $image = Image::read($request->file('image'));
            $image->resize(1200, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            Storage::put($path . $imageName, (string) $image->encode());

            // 4. Buat dan simpan thumbnail (misal, lebar 300px)
            $image->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            Storage::put($pathThumbnail . $imageName, (string) $image->encode());
        }

        // [LOGIKA LAMA DIPERTAHANKAN & DIPERBAIKI] Memproses gambar dari dalam deskripsi (rich text editor)
        $desc = $request->desc;
        $dom = new \DOMDocument();
        // [PERBAIKAN] Menambahkan encoding agar karakter non-latin tidak rusak
        libxml_use_internal_errors(true);
        $dom->loadHTML(mb_convert_encoding($desc, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            // Cek jika src adalah base64 data
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid() . '.' . $mimetype;

                // Simpan gambar dari base64 ke storage
                Storage::put('public/artikel/content/' . $fileNameContent, file_get_contents($src));

                // Ganti src dari base64 menjadi URL publik
                $new_src = Storage::url('public/artikel/content/' . $fileNameContent);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-fluid'); // Bootstrap 5 class
            }
        }

        // [PERBAIKAN] Simpan hanya konten dari <body>
        $cleaned_desc = $dom->saveHTML($dom->getElementsByTagName('body')[0]);

        // Update data di database
        $artikel->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'), // [PERBAIKAN] Update slug juga
            'image' => $imageName,
            'desc' => $cleaned_desc,
        ]);

        return redirect()->route('blog')->with('success', 'Data berhasil diperbarui!');
    }


    # Fungsi Destroy
    public function destroy($id)
    {
        $artikel = Blog::find($id);
        if (\File::exists('storage/artikel/' . $artikel->image)) {
            \File::delete('storage/artikel/' . $artikel->image);
        }

        $artikel->delete();

        return redirect(route('blog'))->with('success', 'data berhasil di hapus');
    }
}
