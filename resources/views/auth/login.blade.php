@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container py-5 col-xxl-6">
            <h3 class="mb-3 fw-bold">
                Halaman Login Sekolah Cibuntu
            </h3>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Masukan Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Masukan Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </section>
@endsection
