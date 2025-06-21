@extends('layouts.layouts')

@section('content')
    <section id="gallery" class="gallery" style="padding-top: 100px;">
        <div class="container">

            <div class="section-title">
                <h2>Galeri</h2>
                <p>Galeri kegiatan dan fasilitas sekolah.</p>
            </div>

            <div class="row gallery-container">
                @foreach ($galleries as $gallery)
                    <div class="col-lg-4 col-md-6 gallery-item">
                        <div class="gallery-wrap">
                            <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid"
                                alt="{{ $gallery->title }}">
                            <div class="gallery-info">
                                <h4>{{ $gallery->title }}</h4>
                                <p>{{ $gallery->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
