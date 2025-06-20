{{-- NavBar --}}
<nav
    class="navbar  navbar-expand-lg  py-3 fixed-top {{ Request::segment(1) == '' ? 'navbar-text-white' : 'bg-white shadow' }}">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/icon/ic-logo.png') }}" alt="Logo" width="55" height="55">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/profile">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/prestasi">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#kontak">Kontak</a>
                </li>

            </ul>
            <div class="d-flex">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-dark">logout</button>
                    </form>
                @else
                    <a href="/login" class="btn btn-danger">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
{{-- NavBar --}}
