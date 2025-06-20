@extends('layouts.layouts')

@section('content')
    <style>
        /* Custom CSS untuk halaman login */
        .login-section {
            /* Menggunakan warna latar yang soft */
            background-color: #f8f9fa;
        }

        .login-image-col {
            /* Menggunakan gambar dari asset Anda sebagai background */
            background: url("{{ asset('assets/image/gedungsekolah.jpg') }}") no-repeat center center;
            background-size: cover;
            /* Diperlukan agar elemen di dalamnya bisa diposisikan */
            position: relative;
        }

        /* Menambahkan overlay gelap agar teks lebih mudah dibaca */
        .login-image-col::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            /* Overlay hitam dengan 40% opacity */
            z-index: 1;
            /* Pastikan overlay di atas background tapi di bawah konten */
        }

        /* Pastikan semua konten di dalam .login-image-col berada di atas overlay */
        .login-image-col>* {
            position: relative;
            z-index: 2;
        }

        .login-form-container {
            /* Padding untuk form di semua ukuran layar */
            padding: 2rem;
        }

        /* Pada layar medium ke atas, beri padding lebih besar */
        @media (min-width: 768px) {
            .login-form-container {
                padding: 3rem;
            }
        }
    </style>

    <div class="container-fluid px-0 login-section">
        <div class="row g-0 min-vh-100">
            <!-- Kolom Gambar (Kiri) - Muncul di layar medium ke atas -->
            <div
                class="col-md-6 col-lg-7 d-none d-md-block login-image-col d-flex flex-column justify-content-center align-items-center text-white text-center p-5">
                {{-- Teks sambutan kini menjadi elemen HTML asli --}}
                <div style="margin-top: 500px">
                    <h1 class="display-4 fw-bold" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.6);">Selamat Datang!</h1>
                    <p class="lead" style="text-shadow: 1px 1px 4px rgba(0,0,0,0.5);">Di Portal Login SDN Cibuntu.</p>
                </div>
            </div>

            <!-- Kolom Form (Kanan) -->
            <div class="col-md-6 col-lg-5 d-flex align-items-center justify-content-center">
                <div class="login-form-container w-100" style="max-width: 450px;">

                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/icon/cibuntu-logo.png') }}" alt="Logo Sekolah" style="height: 60px;"
                            class="mb-3">
                        <h3 class="fw-bold">Login Admin/Guru</h3>
                        <p class="text-muted">Silakan masuk untuk mengakses dasbor Anda.</p>
                    </div>

                    {{-- Menampilkan pesan error jika ada --}}
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <form action="/login" method="POST">
                                @csrf

                                <!-- Input Email dengan Floating Label -->
                                <div class="form-floating mb-3">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="floatingEmail"
                                        placeholder="nama@contoh.com" value="{{ old('email') }}" required>
                                    <label for="floatingEmail">Alamat Email</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Input Password dengan Floating Label -->
                                <div class="form-floating mb-3">
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" id="floatingPassword"
                                        placeholder="Password" required>
                                    <label for="floatingPassword">Password</label>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <!-- Checkbox "Ingat Saya" -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">
                                            Ingat Saya
                                        </label>
                                    </div>
                                    <!-- Link "Lupa Password" -->
                                    <a href="#" class="small text-decoration-none">Lupa Password?</a>
                                </div>

                                <!-- Tombol Login -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg fw-bold">Login</button>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <p class="text-muted small">
                            Belum punya akun? <a href="/register" class="text-decoration-none fw-bold">Daftar di sini</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
