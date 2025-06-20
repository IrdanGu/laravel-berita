{{-- /resources/views/profil.blade.php --}}
@extends('layouts.layouts')

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section text-center text-white">
        <div class="container d-flex align-items-center justify-content-center" style="height: 60vh;">
            <div>
                <h1 class="display-4 fw-bold" data-aos="fade-up">Profil SDN Cibuntu</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="200">Mengenal lebih dekat sekolah kami, tempat generasi
                    penerus bangsa dibentuk.</p>
            </div>
        </div>
    </section>
    {{-- End Hero Section --}}


    {{-- Sejarah Section --}}
    <section id="sejarah" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('assets/image/gedungsekolah.jpg') }}" class="img-fluid rounded shadow-sm"
                        alt="Gedung Sekolah SDN Cibuntu">
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                    <h2 class="fw-bold mb-3">Sejarah Singkat</h2>
                    <p class="text-muted">SDN Cibuntu didirikan pada tahun 1980 dengan semangat untuk memberikan pendidikan
                        dasar yang berkualitas bagi masyarakat sekitar. Berawal dari bangunan sederhana, sekolah kami terus
                        berkembang berkat dukungan dari pemerintah, orang tua murid, dan komunitas.</p>
                    <p class="text-muted">Selama lebih dari empat dekade, kami telah meluluskan ribuan siswa yang
                        berprestasi dan berakhlak mulia, yang kini telah berkontribusi di berbagai bidang. Kami bangga
                        menjadi bagian dari perjalanan pendidikan anak-anak di Kuningan, Jawa Barat.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- End Sejarah Section --}}


    {{-- Visi & Misi Section --}}
    <section id="visi-misi" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Visi & Misi</h2>
                <p class="text-muted">Landasan dan arah tujuan pendidikan di SDN Cibuntu.</p>
            </div>
            <div class="row">
                {{-- Visi --}}
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <h3 class="card-title fw-bold text-primary">Visi</h3>
                            <p class="card-text">"Terwujudnya peserta didik yang cerdas, kreatif, berakhlak mulia, cinta
                                tanah air, dan mampu bersaing secara global berlandaskan iman dan takwa."</p>
                        </div>
                    </div>
                </div>
                {{-- Misi --}}
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <h3 class="card-title fw-bold text-primary">Misi</h3>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Menyelenggarakan
                                    pembelajaran yang aktif, inovatif, dan menyenangkan.</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Mengembangkan
                                    potensi siswa di bidang akademik dan non-akademik.</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Menanamkan
                                    nilai-nilai keimanan, akhlak mulia, dan budi pekerti luhur.</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Membangun jiwa
                                    nasionalisme dan cinta terhadap budaya bangsa.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Visi & Misi Section --}}


    {{-- Struktur Organisasi Section --}}
    <section id="struktur" class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Struktur Organisasi</h2>
                <p class="text-muted">Tim yang berdedikasi untuk memajukan SDN Cibuntu.</p>
            </div>
            <div class="row text-center">
                {{-- Person 1: Kepala Sekolah --}}
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://placehold.co/300x300/6c757d/white?text=Foto" class="card-img-top"
                            alt="Kepala Sekolah">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Budi Santoso, S.Pd.</h5>
                            <p class="card-text text-muted">Kepala Sekolah</p>
                        </div>
                    </div>
                </div>
                {{-- Person 2: Wakasek Kurikulum --}}
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://placehold.co/300x300/6c757d/white?text=Foto" class="card-img-top"
                            alt="Wakil Kepala Sekolah">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Siti Aminah, M.Pd.</h5>
                            <p class="card-text text-muted">Wakasek Kurikulum</p>
                        </div>
                    </div>
                </div>
                {{-- Person 3: Wakasek Kesiswaan --}}
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://placehold.co/300x300/6c757d/white?text=Foto" class="card-img-top" alt="Staff">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Ahmad Fauzi, S.Ag.</h5>
                            <p class="card-text text-muted">Wakasek Kesiswaan</p>
                        </div>
                    </div>
                </div>
                {{-- Person 4: Kepala TU --}}
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="https://placehold.co/300x300/6c757d/white?text=Foto" class="card-img-top" alt="Staff">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Rina Handayani</h5>
                            <p class="card-text text-muted">Kepala Tata Usaha</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Struktur Organisasi Section --}}


    {{-- Menambahkan sedikit CSS untuk Hero Section --}}
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/image/suasanasekolah.jpg') no-repeat center center;
            background-size: cover;
        }

        .list-unstyled .bi {
            position: relative;
            top: 2px;
        }
    </style>

    {{-- Menambahkan ikon Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection
