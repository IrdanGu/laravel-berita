{{-- NavBar --}}
<nav class="navbar navbar-dark navbar-expand-lg  py-3 fixed-top {{ Request::segment(1) == '' ? '' : 'bg-white' }}">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/icon/ic-logo.png') }}" alt="Logo" width="55" height="55">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Kontak</a>
                </li>

            </ul>
            <div class="d-flex">
                <button class="btn btn-danger">Register</button>
            </div>
        </div>
    </div>
</nav>
{{-- NavBar --}}
