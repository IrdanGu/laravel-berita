<?php

namespace App\Http\Controllers;

use App\Models\Blog;      // <-- PENTING: Tambahkan ini
use App\Models\Prestasi;  // <-- PENTING: Tambahkan ini
use App\Models\User;      // <-- PENTING: Tambahkan ini (Untuk Penulis Artikel)
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman utama dashboard dengan data ringkasan.
     */
    public function index()
    {
        // Ambil data statistik dari database
        $totalPosts = Blog::count();
        $totalPrestasi = Prestasi::count();

        // Ambil 5 artikel terbaru, beserta nama penulisnya (user)
        $recentPosts = Blog::with('user')->latest()->take(5)->get();

        // Arahkan ke view dashboard yang BENAR dan kirim data yang dibutuhkan
        return view('dashboard.index', [
            'totalPosts' => $totalPosts,
            'totalPrestasi' => $totalPrestasi,
            'recentPosts' => $recentPosts,
        ]);
    }
}
