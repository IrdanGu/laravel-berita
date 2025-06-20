@extends('layouts.dashboard')

{{-- Judul Halaman --}}
@section('page-title', 'Dashboard Utama')

@section('content')
    <div class="container-fluid">
        {{-- Header Selamat Datang --}}
        <div class="mb-4">
            <h1 class="h3 fw-bold">Selamat Datang, {{ Auth::user()->name ?? 'Admin' }}!</h1>
            <p class="text-muted">Berikut adalah ringkasan aktivitas di website Anda.</p>
        </div>

        {{-- Baris Kartu Statistik --}}
        <div class="row">
            {{-- Kartu Total Artikel --}}
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-start border-primary border-4 h-100 py-2 shadow-sm">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col me-2">
                                <div class="text-xs fw-bold text-primary text-uppercase mb-1">Total Artikel</div>
                                <div class="h5 mb-0 fw-bold text-gray-800">{{ $totalPosts ?? 0 }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-newspaper fs-1 text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kartu Total Prestasi --}}
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-start border-success border-4 h-100 py-2 shadow-sm">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col me-2">
                                <div class="text-xs fw-bold text-success text-uppercase mb-1">Total Prestasi</div>
                                <div class="h5 mb-0 fw-bold text-gray-800">{{ $totalPrestasi ?? 0 }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-trophy-fill fs-1 text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kartu Placeholder 1 (misal: Jumlah Guru) --}}
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-start border-info border-4 h-100 py-2 shadow-sm">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col me-2">
                                <div class="text-xs fw-bold text-info text-uppercase mb-1">Jumlah Guru</div>
                                <div class="h5 mb-0 fw-bold text-gray-800">15</div> {{-- Ganti dengan data asli nanti --}}
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-person-video3 fs-1 text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kartu Placeholder 2 (misal: Jumlah Siswa) --}}
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-start border-warning border-4 h-100 py-2 shadow-sm">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col me-2">
                                <div class="text-xs fw-bold text-warning text-uppercase mb-1">Jumlah Siswa</div>
                                <div class="h5 mb-0 fw-bold text-gray-800">250</div> {{-- Ganti dengan data asli nanti --}}
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-people-fill fs-1 text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Baris Konten Utama (Aktivitas & Akses Cepat) --}}
        <div class="row">
            {{-- Kolom Kiri: Aktivitas Terbaru --}}
            <div class="col-lg-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 fw-bold text-primary">Artikel Terbaru</h6>
                        <a href="{{ route('blog') }}" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($recentPosts as $post)
                                        <tr>
                                            <td>{{ Str::limit($post->title, 40) }}</td>
                                            <td>{{ $post->user->name ?? 'N/A' }}</td>
                                            <td>{{ $post->created_at->format('d M Y') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">Belum ada artikel.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kolom Kanan: Akses Cepat --}}
            <div class="col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 fw-bold text-primary">Akses Cepat</h6>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <a href="{{ route('blog.create') }}"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Tulis Artikel Baru
                                <i class="bi bi-plus-circle-fill text-success"></i>
                            </a>
                            <a href="{{ route('prestasi.create') }}"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Tambah Data Prestasi
                                <i class="bi bi-plus-circle-fill text-success"></i>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Kelola Gallery
                                <i class="bi bi-images text-info"></i>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Pengaturan Website
                                <i class="bi bi-gear-fill text-secondary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
