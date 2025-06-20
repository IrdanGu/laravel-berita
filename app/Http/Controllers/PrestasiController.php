<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasis = Prestasi::latest()->paginate(10);
        return view('dashboard.prestasi.index', compact('prestasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_prestasi' => 'required|string|max:255',
            'nama_siswa' => 'required|string|max:255',
            'tingkat' => 'required|in:Sekolah,Kecamatan,Kabupaten,Provinsi,Nasional,Internasional',
            'tahun' => 'required|integer|min:2000|max:' . date('Y'),
            'kategori' => 'required|in:Akademik,Olahraga,Seni,Lainnya',
            'deskripsi' => 'nullable|string',
        ]);

        Prestasi::create($validatedData);

        return redirect()->route('prestasi.index')->with('success', 'Data prestasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestasi $prestasi)
    {
        // Biasanya tidak digunakan untuk dashboard, bisa diabaikan
        return view('dashboard.prestasi.show', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestasi $prestasi)
    {
        return view('dashboard.prestasi.edit', compact('prestasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        $validatedData = $request->validate([
            'nama_prestasi' => 'required|string|max:255',
            'nama_siswa' => 'required|string|max:255',
            'tingkat' => 'required|in:Sekolah,Kecamatan,Kabupaten,Provinsi,Nasional,Internasional',
            'tahun' => 'required|integer|min:2000|max:' . date('Y'),
            'kategori' => 'required|in:Akademik,Olahraga,Seni,Lainnya',
            'deskripsi' => 'nullable|string',
        ]);

        $prestasi->update($validatedData);

        return redirect()->route('prestasi.index')->with('success', 'Data prestasi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestasi $prestasi)
    {
        $prestasi->delete();
        return redirect()->route('prestasi.index')->with('success', 'Data prestasi berhasil dihapus!');
    }
}
