@extends('layouts.layouts')

@section('content')
    {{-- Berita --}}
    <section id="berita" class="py-5" style="margin-top: 100px;">
        <div class="container">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Berita Kegiatan Sekolah</h2>
            </div>


            <div class="row py-5" data-aos="flip-up">
                @foreach ($artikels as $item)
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('storage/artikel/' . $item->image) }}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita"></div>
                            <p class="mb-3 text-secondary">{{ $item->create_at }}</p>
                            <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                            <p class="text-secondary">#sekolahmodern</p>
                            <a href="/detail/{{ $item->slug }}" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
    {{-- Berita --}}
@endsection
