@extends('layouts.layouts2')

@section('content')
    <div class="container" style="margin-top: 100px">
        <div class="card col-lg-8 mx-auto">
            <div class="card-header">
                <h3 class="fw-bold">Form Tambah Prestasi Baru</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('prestasi.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_prestasi" class="form-label">Nama Prestasi</label>
                        <input type="text" class="form-control @error('nama_prestasi') is-invalid @enderror"
                            id="nama_prestasi" name="nama_prestasi" value="{{ old('nama_prestasi') }}" required>
                        @error('nama_prestasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama Siswa / Tim</label>
                        <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa"
                            name="nama_siswa" value="{{ old('nama_siswa') }}" required>
                        @error('nama_siswa')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="tingkat" class="form-label">Tingkat</label>
                            <select class="form-select @error('tingkat') is-invalid @enderror" id="tingkat" name="tingkat"
                                required>
                                <option value="" disabled selected>-- Pilih Tingkat --</option>
                                <option value="Sekolah" {{ old('tingkat') == 'Sekolah' ? 'selected' : '' }}>Sekolah</option>
                                <option value="Kecamatan" {{ old('tingkat') == 'Kecamatan' ? 'selected' : '' }}>Kecamatan
                                </option>
                                <option value="Kabupaten" {{ old('tingkat') == 'Kabupaten' ? 'selected' : '' }}>Kabupaten
                                </option>
                                <option value="Provinsi" {{ old('tingkat') == 'Provinsi' ? 'selected' : '' }}>Provinsi
                                </option>
                                <option value="Nasional" {{ old('tingkat') == 'Nasional' ? 'selected' : '' }}>Nasional
                                </option>
                                <option value="Internasional" {{ old('tingkat') == 'Internasional' ? 'selected' : '' }}>
                                    Internasional</option>
                            </select>
                            @error('tingkat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="number" class="form-control @error('tahun') is-invalid @enderror" id="tahun"
                                name="tahun" value="{{ old('tahun', date('Y')) }}" required>
                            @error('tahun')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select @error('kategori') is-invalid @enderror" id="kategori" name="kategori"
                            required>
                            <option value="" disabled selected>-- Pilih Kategori --</option>
                            <option value="Akademik" {{ old('kategori') == 'Akademik' ? 'selected' : '' }}>Akademik
                            </option>
                            <option value="Olahraga" {{ old('kategori') == 'Olahraga' ? 'selected' : '' }}>Olahraga
                            </option>
                            <option value="Seni" {{ old('kategori') == 'Seni' ? 'selected' : '' }}>Seni</option>
                            <option value="Lainnya" {{ old('kategori') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi (Opsional)</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('prestasi.index') }}" class="btn btn-secondary me-2">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
