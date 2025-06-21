    @extends('layouts.dashboard')

    @section('content')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Struktur Organisasi</h1>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-10" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive col-lg-10">
            <a href="{{ route('dashboard.organization.create') }}" class="btn btn-primary mb-3">Tambah Anggota Baru</a>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Urutan</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $member->order }}</td>
                            <td>
                                @if ($member->photo)
                                    <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}"
                                        class="img-fluid" width="50">
                                @else
                                    <img src="https://placehold.co/50x50/666/fff?text=Foto" alt="{{ $member->name }}">
                                @endif
                            </td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->position }}</td>
                            <td>
                                <a href="{{ route('dashboard.organization.edit', $member->id) }}"
                                    class="badge bg-warning"><span data-feather="edit">edit</span></a>
                                <form action="{{ route('dashboard.organization.destroy', $member->id) }}" method="post"
                                    class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Anda yakin ingin menghapus data ini?')"><span
                                            data-feather="x-circle"></span>delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
