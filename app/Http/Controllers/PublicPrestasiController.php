<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PublicPrestasiController extends Controller
{
    /**
     * Menampilkan halaman galeri prestasi publik.
     */
    public function index()
    {
        // Mengambil semua data prestasi, diurutkan dari yang terbaru
        $prestasis = Prestasi::latest()->get();

        // Mengirim data ke view 'prestasi'
        return view('prestasi', compact('prestasis'));
    }
}