@extends('layouts.dashboard') {{-- Sesuaikan dengan layout dashboard Anda --}}

@section('content')
    <div class="container-fluid" style="margin-top: 100px">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="fw-bold">Kelola Data Prestasi</h3>
                <a href="{{ route('prestasi.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle me-2"></i>Tambah Prestasi
                </a>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Prestasi</th>
                                <th scope="col">Nama Siswa/Tim</th>
                                <th scope="col">Tingkat</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($prestasis as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration + $prestasis->firstItem() - 1 }}</th>
                                    <td>{{ $item->nama_prestasi }}</td>
                                    <td>{{ $item->nama_siswa }}</td>
                                    <td><span class="badge bg-info">{{ $item->tingkat }}</span></td>
                                    <td>{{ $item->tahun }}</td>
                                    <td><span class="badge bg-secondary">{{ $item->kategori }}</span></td>
                                    <td>
                                        <a href="{{ route('prestasi.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <form action="{{ route('prestasi.destroy', $item->id) }}" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data prestasi.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{-- Pagination Links --}}
                <div class="mt-3">
                    {{ $prestasis->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
