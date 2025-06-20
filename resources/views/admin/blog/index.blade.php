@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid" style="margin-top: 100px;">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-0 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="fw-bold mb-0">Kelola Artikel Blog</h3>
                    <a href="{{ route('blog.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle me-2"></i>Buat Artikel Baru
                    </a>
                </div>
            </div>
            <div class="card-body">
                {{-- Pesan Sukses --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Judul Artikel</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Tanggal Publikasi</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($artikels as $artikel)
                                <tr>
                                    <th scope="row">{{ $loop->iteration + $artikels->firstItem() - 1 }}</th>
                                    <td>
                                        <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="rounded"
                                            height="100" alt="Gambar {{ $artikel->judul }}">
                                    </td>
                                    <td class="fw-semibold">{{ Str::limit($artikel->judul, 50) }}</td>
                                    <td>{{ $artikel->user->name ?? 'N/A' }}</td>
                                    <td>{{ $artikel->created_at->format('d M Y') }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('blog.edit', $artikel->id) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <form action="{{ route('blog.destroy', $artikel->id) }}" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini? Tindakan ini tidak dapat dibatalkan.');">
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
                                    <td colspan="6" class="text-center py-4">
                                        <p class="mb-0 text-muted">Belum ada artikel yang dibuat.</p>
                                        <a href="{{ route('blog.create') }}" class="btn btn-primary btn-sm mt-2">Buat
                                            Artikel Pertama Anda</a>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination Links --}}
                <div class="mt-3">
                    {{ $artikels->links() }}
                </div>
            </div>
        </div>
    </div>

    {{-- Menambahkan Bootstrap Icons jika belum ada di layout utama --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection
