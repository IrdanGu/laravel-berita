@extends('layouts.layouts')

@section('content')
    {{-- Hero Section for Prestasi --}}
    <section class="hero-section-prestasi text-center text-white">
        <div class="container d-flex align-items-center justify-content-center" style="height: 60vh;">
            <div>
                <h1 class="display-4 fw-bold" data-aos="fade-up">Galeri Prestasi Siswa</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="200">Kumpulan pencapaian gemilang siswa-siswi SDN Cibuntu
                    dalam berbagai bidang.</p>
            </div>
        </div>
    </section>
    {{-- End Hero Section --}}


    {{-- Prestasi Content Section --}}
    <section id="prestasi" class="py-5">
        <div class="container">
            {{-- Filter Buttons --}}
            <div class="row mb-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-8 text-center">
                    <button class="btn btn-primary mx-1 mb-2 filter-btn active" data-filter="semua">Semua</button>
                    <button class="btn btn-outline-primary mx-1 mb-2 filter-btn" data-filter="akademik">Akademik</button>
                    <button class="btn btn-outline-primary mx-1 mb-2 filter-btn" data-filter="olahraga">Olahraga</button>
                    <button class="btn btn-outline-primary mx-1 mb-2 filter-btn" data-filter="seni">Seni & Budaya</button>
                    <button class="btn btn-outline-primary mx-1 mb-2 filter-btn" data-filter="lainnya">Lainnya</button>
                </div>
            </div>

            {{-- Prestasi Grid --}}
            <div class="row prestasi-list">
                @forelse ($prestasis as $prestasi)
                    {{-- Menentukan gambar berdasarkan kategori --}}
                    @php
                        $imagePath = 'assets/image/prestasi-lainnya.jpg'; // Gambar default
                        if (strtolower($prestasi->kategori) == 'akademik') {
                            $imagePath = 'assets/image/prestasi-akademik.jpg';
                        } elseif (strtolower($prestasi->kategori) == 'olahraga') {
                            $imagePath = 'assets/image/prestasi-olahraga.png';
                        } elseif (strtolower($prestasi->kategori) == 'seni') {
                            $imagePath = 'assets/image/prestasi-senibudaya.png';
                        }

                        // Menentukan warna badge berdasarkan tingkat
                        $badgeColor = 'bg-secondary';
                        switch ($prestasi->tingkat) {
                            case 'Nasional':
                            case 'Internasional':
                                $badgeColor = 'bg-success';
                                break;
                            case 'Provinsi':
                                $badgeColor = 'bg-warning text-dark';
                                break;
                            case 'Kabupaten':
                                $badgeColor = 'bg-info';
                                break;
                            default:
                                $badgeColor = 'bg-primary';
                                break;
                        }
                    @endphp

                    <div class="col-lg-4 col-md-6 mb-4 prestasi-item" data-category="{{ strtolower($prestasi->kategori) }}"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset($imagePath) }}" class="card-img-top"
                                style="height: 200px; object-fit: cover;" alt="{{ $prestasi->nama_prestasi }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold">{{ $prestasi->nama_prestasi }}</h5>
                                <p class="card-text text-muted mb-2">{{ $prestasi->deskripsi }}</p>
                                <div class="mt-auto">
                                    <p class="mb-1 fw-semibold">Diraih oleh: {{ $prestasi->nama_siswa }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">Tahun {{ $prestasi->tahun }}</small>
                                        <span class="badge {{ $badgeColor }}">{{ $prestasi->tingkat }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted fs-5">Saat ini belum ada data prestasi yang dapat ditampilkan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    {{-- End Prestasi Content Section --}}


    {{-- CSS and JS (Tetap sama) --}}
    <style>
        .hero-section-prestasi {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("{{ asset('assets/image/suasanasekolah.jpg') }}") no-repeat center center;
            background-size: cover;
        }

        .prestasi-item {
            transition: transform 0.3s ease-in-out, opacity 0.4s ease;
        }

        .prestasi-item:hover {
            transform: translateY(-5px);
        }

        .filter-btn.active {
            background-color: var(--bs-primary);
            color: white;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const prestasiItems = document.querySelectorAll('.prestasi-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    prestasiItems.forEach(item => {
                        // Menggunakan animasi fade out/in sederhana
                        item.style.transition = 'opacity 0.3s ease-in-out';
                        item.style.opacity = '0';

                        setTimeout(() => {
                            if (filter === 'semua' || item.getAttribute(
                                    'data-category') === filter) {
                                item.style.display = 'block';
                                item.style.opacity = '1';
                            } else {
                                item.style.display = 'none';
                            }
                        }, 300);
                    });
                });
            });
        });
    </script>
@endsection
