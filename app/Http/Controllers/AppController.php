<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\OrganizationStructure;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('welcome', [
            "artikels" => Blog::orderBy('id', 'desc')->limit(3)->get()
        ]);
    }

    public function berita()
    {
        return view('berita.berita',   [
            "artikels" => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($slug)
    {
        $artikel = Blog::where('slug', $slug)->first();
        return view('berita.detail', [
            'artikel' => $artikel
        ]);
    }
    public function profile()
    {
        return view('profile', [
            'title' => 'Profil Sekolah',
            'active' => 'profile',
            'organization' => OrganizationStructure::orderBy('order')->get()
        ]);
    }
}