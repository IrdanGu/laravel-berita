<?php
// app/Http/Controllers/GalleryController.php
namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // Menampilkan halaman galeri di sisi publik
    public function publicIndex()
    {
        return view('gallery', [
            'galleries' => Gallery::latest()->get()
        ]);
    }

    // Menampilkan halaman manajemen galeri di dasbor
    public function index()
    {
        return view('dashboard.gallery.index', [
            'galleries' => Gallery::latest()->get()
        ]);
    }

    // Menampilkan form untuk menambah gambar baru
    public function create()
    {
        return view('dashboard.gallery.create');
    }

    // Menyimpan gambar baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|file|max:2048',
            'description' => 'nullable'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('gallery-images', 'public');
        }

        Gallery::create($validatedData);

        return redirect('/dashboard/galleries')->with('success', 'Gambar baru telah ditambahkan!');
    }

    // Menghapus gambar dari database dan storage
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::disk('public')->delete($gallery->image);
        }

        Gallery::destroy($gallery->id);

        return redirect('/dashboard/galleries')->with('success', 'Gambar telah dihapus!');
    }
}