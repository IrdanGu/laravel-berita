@extends('layouts.layouts2')

@section('content')
    <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <!-- Breadcrumb Navigation -->
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog') }}">Kelola Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Artikel</li>
                    </ol>
                </nav>

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white border-0 py-3">
                        <h4 class="fw-bold mb-0">Formulir Edit Artikel</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('blog.update', $artikel->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="judul" class="form-label fw-semibold">Judul Artikel</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                    id="judul" name="judul" value="{{ old('judul', $artikel->judul) }}" required>
                                @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label fw-semibold">Gambar Utama</label>
                                <input type="hidden" name="oldImage" value="{{ $artikel->image }}">

                                @if ($artikel->image)
                                    <img src="{{ asset('storage/artikel/' . $artikel->image) }}" id="image-preview"
                                        class="img-fluid rounded col-lg-4 mb-2 d-block" alt="Preview Gambar">
                                @else
                                    <img id="image-preview" class="img-fluid rounded col-lg-4 mb-2 d-none"
                                        alt="Preview Gambar">
                                @endif

                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" name="image" onchange="previewImage();">
                                <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="summernote" class="form-label fw-semibold">Isi Artikel</label>
                                <textarea name="desc" id="summernote" class="form-control @error('desc') is-invalid @enderror">
                                {!! old('desc', $artikel->desc) !!}
                            </textarea>
                                @error('desc')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <a href="{{ route('blog') }}" class="btn btn-secondary me-2">Batal</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save me-2"></i>Update Artikel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('#image-preview');

            imgPreview.classList.remove('d-none');
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

    {{-- Menambahkan Bootstrap Icons jika belum ada di layout utama --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection
