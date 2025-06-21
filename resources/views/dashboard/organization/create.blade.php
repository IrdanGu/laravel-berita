    @extends('layouts.dashboard')

    @section('content')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Anggota Baru</h1>
        </div>

        <div class="col-lg-8">
            <form method="post" action="{{ route('dashboard.organization.store') }}" class="mb-5"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" required autofocus value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Jabatan</label>
                    <input type="text" class="form-control @error('position') is-invalid @enderror" id="position"
                        name="position" required value="{{ old('position') }}">
                    @error('position')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="order" class="form-label">Nomor Urut</label>
                    <input type="number" class="form-control @error('order') is-invalid @enderror" id="order"
                        name="order" required value="{{ old('order', 0) }}">
                    @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Foto</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo"
                        name="photo" onchange="previewImage()">
                    @error('photo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Anggota</button>
            </form>
        </div>

        <script>
            function previewImage() {
                const image = document.querySelector('#photo');
                const imgPreview = document.querySelector('.img-preview');

                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
        </script>
    @endsection
