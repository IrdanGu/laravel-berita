@extends('layouts.layouts')

@section('content')
    {{-- Berita --}}
    <section id="berita" class="py-5" style="margin-top: 100px;">
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
@endsection
