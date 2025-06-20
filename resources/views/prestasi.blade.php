{{-- /resources/views/prestasi.blade.php --}}
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
                {{-- Contoh Prestasi 1 (Akademik) --}}
                <div class="col-lg-4 col-md-6 mb-4 prestasi-item" data-category="akademik" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://placehold.co/600x400/007bff/white?text=Foto+Prestasi" class="card-img-top"
                            alt="Juara 1 Olimpiade Sains">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Juara 1 Olimpiade Sains Nasional (OSN)</h5>
                            <p class="card-text text-muted mb-2">Siswa kami berhasil meraih medali emas dalam kompetisi
                                sains paling bergengsi tingkat nasional.</p>
                            <div class="mt-auto">
                                <p class="mb-1 fw-semibold">Diraih oleh: Ananda Putri</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Tahun 2024</small>
                                    <span class="badge bg-success">Tingkat Nasional</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contoh Prestasi 2 (Olahraga) --}}
                <div class="col-lg-4 col-md-6 mb-4 prestasi-item" data-category="olahraga" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://placehold.co/600x400/28a745/white?text=Foto+Prestasi" class="card-img-top"
                            alt="Juara 1 O2SN Catur">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Juara 1 O2SN Cabang Catur</h5>
                            <p class="card-text text-muted mb-2">Strategi dan ketenangan membawa siswa kami menjadi yang
                                terbaik di tingkat provinsi.</p>
                            <div class="mt-auto">
                                <p class="mb-1 fw-semibold">Diraih oleh: Bima Sakti</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Tahun 2024</small>
                                    <span class="badge bg-warning text-dark">Tingkat Provinsi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contoh Prestasi 3 (Seni) --}}
                <div class="col-lg-4 col-md-6 mb-4 prestasi-item" data-category="seni" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://placehold.co/600x400/dc3545/white?text=Foto+Prestasi" class="card-img-top"
                            alt="Juara Lomba Tari Kreasi">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Juara 2 Lomba Tari Kreasi Daerah</h5>
                            <p class="card-text text-muted mb-2">Tim tari sekolah menampilkan gerak yang indah dan memukau
                                juri di tingkat kabupaten.</p>
                            <div class="mt-auto">
                                <p class="mb-1 fw-semibold">Diraih oleh: Tim Tari "Melati"</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Tahun 2023</small>
                                    <span class="badge bg-info">Tingkat Kabupaten</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contoh Prestasi 4 (Akademik) --}}
                <div class="col-lg-4 col-md-6 mb-4 prestasi-item" data-category="akademik" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://placehold.co/600x400/007bff/white?text=Foto+Prestasi" class="card-img-top"
                            alt="Lomba Cerdas Cermat">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Juara Harapan 1 Cerdas Cermat</h5>
                            <p class="card-text text-muted mb-2">Tim cerdas cermat kami menunjukkan wawasan yang luas dalam
                                kompetisi antar sekolah.</p>
                            <div class="mt-auto">
                                <p class="mb-1 fw-semibold">Diraih oleh: Tim Cerdas Cermat</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Tahun 2023</small>
                                    <span class="badge bg-info">Tingkat Kabupaten</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contoh Prestasi 5 (Lainnya) --}}
                <div class="col-lg-4 col-md-6 mb-4 prestasi-item" data-category="lainnya" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://placehold.co/600x400/6c757d/white?text=Foto+Prestasi" class="card-img-top"
                            alt="Sekolah Adiwiyata">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Penghargaan Sekolah Adiwiyata</h5>
                            <p class="card-text text-muted mb-2">Penghargaan atas komitmen sekolah dalam menciptakan
                                lingkungan belajar yang hijau dan sehat.</p>
                            <div class="mt-auto">
                                <p class="mb-1 fw-semibold">Diberikan oleh: Kementrian LHK</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Tahun 2023</small>
                                    <span class="badge bg-success">Tingkat Nasional</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- End Prestasi Content Section --}}


    {{-- CSS and JS --}}
    <style>
        .hero-section-prestasi {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/image/suasanasekolah.jpg') no-repeat center center;
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
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    // Filter items
                    prestasiItems.forEach(item => {
                        if (filter === 'semua' || item.getAttribute('data-category') ===
                            filter) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
@endsection
