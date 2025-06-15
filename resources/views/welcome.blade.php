@extends('layouts.layouts')

@section('content')
    {{-- Hero Section --}}
    <section id="hero">
        <div class="container text-white text-center">
            <div class="hero-title" data-aos="fade-up">
                <div class="hero-text">Selamaat Datang <br> SDN Cibuntu</div>
                <h4>SD Modern Dengan Konsep Kurikulum Merdeka</h4>

            </div>
        </div>
    </section>
    {{-- Hero Section --}}



    {{-- Section Program --}}
    <section class="program" style="margin-top: -30px;">
        <div class="container col-xxl-9">
            <div class="row">
                <div class="col-lg-3 col-md-6 col md-2 " data-aos="flip-left">
                    <div class="bg-white rounded-3 p-3 d-flex align-items-center shadow-sm justify-content-between">
                        <div>
                            <p>Pendididkan <br> Berkualitas</p>
                        </div>
                        <img src="{{ asset('assets\icon\ic-book.png') }}" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col md-2 " data-aos="flip-left">
                    <div class="bg-white rounded-3 p-3 d-flex align-items-center shadow-sm justify-content-between">
                        <div>
                            <p>Pendididkan <br> Berahklak</p>
                        </div>
                        <img src="{{ asset('assets\icon\ic-globe.png') }}" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col md-2 " data-aos="flip-left">
                    <div class="bg-white rounded-3 p-3 d-flex align-items-center shadow-sm justify-content-between">
                        <div>
                            <p>Pendididkan <br> Muamalah</p>
                        </div>
                        <img src="{{ asset('assets\icon\ic-neraca.png') }}" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col md-2 " data-aos="flip-left">
                    <div class="bg-white rounded-3 p-3 d-flex align-items-center shadow-sm justify-content-between">
                        <div>
                            <p>Pendididkan <br> Teknologi</p>
                        </div>
                        <img src="{{ asset('assets\icon\ic-komputer.png') }}" height="55" width="55" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section Program --}}



    {{-- Berita --}}
    <section id="berita" class="py-5">
        <div class="container">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Berita Kegiatan Sekolah</h2>
            </div>
            <div class="row py-5" data-aos="flip-up">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/image/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita"></div>
                        <p class="mb-3 text-secondary">21/05/2005</p>
                        <h4 class="fw-bold mb-3">Pengajian Bulananan SDN 1 Cibuntu</h4>
                        <p class="text-secondary">#sekolahmodern</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/image/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita"></div>
                        <p class="mb-3 text-secondary">21/05/2005</p>
                        <h4 class="fw-bold mb-3">Pengajian Bulananan SDN 1 Cibuntu</h4>
                        <p class="text-secondary">#sekolahmodern</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/image/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita"></div>
                        <p class="mb-3 text-secondary">21/05/2005</p>
                        <h4 class="fw-bold mb-3">Pengajian Bulananan SDN 1 Cibuntu</h4>
                        <p class="text-secondary">#sekolahmodern</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
            </div>
        </div>
    </section>
    {{-- Berita --}}

    {{-- Join --}}
    <section id="join" class="py-5">
        <div class="container py-5">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stripe me-2"></div>
                        <h5>Daftar Santri</h5>
                    </div>
                    <h1 class="fw-bold mb-2">Gabung bersama kami, mewujudkan generasi rabbani</h1>
                    <p class="mb-3">
                        Pesantren Al Hijrah merupakan pesantren terbaik di Jawa Barat, dengan meluluskan santri menjadi
                        ustadz terkemuka mendakwahkan di pelosok nusantara
                    </p>
                    <button class="btn btn-outline-danger">Register</button>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{ asset('assets\image\il-photo-01.png') }}" class="img-fluid rounded-4" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Join --}}

    {{-- Vidio --}}
    <section id="video" class="py-5">
        <div class="container py-5">
            <div class="text-center">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/A927ale9-vI?si=66gypaZ37PTBTXSc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    {{-- Vidio --}}

    <section id="vidio_youtube" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center ">
                <h2 class="fw-bold">Vidio Kegiatan Sekolah</h2>
            </div>
            <div class="row py-5">
                <div class="col-lg-4">
                    <iframe width="100%" height="225"
                        src="https://www.youtube.com/embed/A927ale9-vI?si=66gypaZ37PTBTXSc" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="100%" height="225"
                        src="https://www.youtube.com/embed/A927ale9-vI?si=66gypaZ37PTBTXSc" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="100%" height="225"
                        src="https://www.youtube.com/embed/A927ale9-vI?si=66gypaZ37PTBTXSc" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-danger">Vidio Lainnya</a>
            </div>
        </div>
    </section>

    <section id="foto" class="section-foto parallax">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                </div>
                <div>
                    <a href="" class="btn btn-outline-white">Foto lainnya</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <img src="{{ asset('assets/image/il-photo-01.png') }}" class="img-fluid" alt=""
                        data-aos="fade-down">
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <img src="{{ asset('assets/image/il-photo-02.png') }}" class="img-fluid" alt=""
                        data-aos="fade-down">
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <img src="{{ asset('assets/image/il-photo-03.png') }}" class="img-fluid" alt=""
                        data-aos="fade-down">
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <img src="{{ asset('assets/image/il-photo-04.png') }}" class="img-fluid" alt=""
                        data-aos="fade-down">
                </div>
            </div>
        </div>
    </section>

    {{-- fasilitas --}}
    <section id="fasilitas" class="py-5">
        <div class="container py-5">
            <div class="text-center">
                <h3 class="fw-bold">Fasilitas Pesantren</h3>
            </div>
            <img src="{{ asset('assets\image\il-fasilitas.jpg') }}" class="img-fluid py-5" alt=""
                data-aos="zoom-out-up">

            <div class="text-center">
                <a href="" class="btn btn-outline-danger">Fasilitas Lainnya</a>
            </div>
        </div>
    </section>
    {{-- fasilitas --}}
@endsection
