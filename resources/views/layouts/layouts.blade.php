<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets\icon\ic-logo.ico') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    {{-- aos animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- summernote --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css">
    {{-- end summernote --}}

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Website Sekolah</title>
</head>

<body>
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Hero --}}
    {{-- Konten --}}
    @yield('content')




    {{-- Footer --}}
    <section id="footer" class="bg-white">
        <div class="container py-4">
            <footer>
                <div class="row">
                    {{-- kolom 1 --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Berita
                                        Sekolah</a></li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kegiatan
                                        Sekolah</a></li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Gallery
                                        Sekolah</a></li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kegiatan
                                        Sosial</a></li>
                            </ul>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Alumni</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Info
                                        PSB</a></li>
                                <li class="nav-item mb-2"><a href="/prestasi"
                                        class="nav-link p-0 text-muted">Prestasi</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Video
                                        Kegiatan</a></li>
                            </ul>
                        </div>
                    </div>

                    {{-- kolom 2 --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Follow kami</h5>
                        <div class="d-flex mb-3">
                            <a href="#" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/icon/youtube.svg') }}" height="30" width="30"
                                    class="me-4" alt="Instagram">
                            </a>

                            <a href="#" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/icon/instagram.svg') }}" height="30" width="30"
                                    class="me-4" alt="Facebook">
                            </a>

                            <a href="#" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/icon/whatsapp.svg') }}" height="30" width="30"
                                    class="me-4" alt="TikTok">
                            </a>

                            <a href="#" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/icon/instagram.svg') }}" height="30" width="30"
                                    class="me-4" alt="YouTube">
                            </a>
                        </div>
                    </div>

                    {{-- kolom 3 --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="font-inter fw-bold mb-3">Kontak kami</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-muted">info@cibutu.sch.id</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">021-123-456</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">021-123-456</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">021-123-456</a>
                            </li>
                        </ul>
                    </div>

                    {{-- kolom 4 --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="font-inter fw-bold mb-3">Alamat Sekolah</h5>
                        <p> Jl. Cibuntu, No 115, Kunigan, Jawa Barat.</p>
                    </div>
                </div>
            </footer>
        </div>
    </section>
    {{-- Footer --}}


    <section class="bg-light border-top">
        <div class="container py-4">
            <div class="d-flex justify-content-between">
                <div>
                    SDN Cibuntu
                </div>
                <div class="d-flex">
                    <p class="me-4">Syarat & Ketentuan</p>
                    <p>
                        <a href="/Kebijakan" class="text-decoration-none text-dark">Kebijakan Privacy</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
                navbar.classList.add("navbar-dark");
            }
        };
        AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200, // set editor height
            });
        });
    </script>



</body>

</html>
