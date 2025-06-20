<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/icon/ic-logo.ico') }}">

    <title>Dashboard Admin - Website Sekolah</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Custom CSS for Dashboard --}}
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }

        .main-content {
            margin-left: 250px;
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: rgba(255, 255, 255, .7);
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: #fff;
        }

        .sidebar .nav-link .bi {
            margin-right: 8px;
        }
    </style>
</head>

<body>
    {{-- 1. Sidebar --}}
    @include('partials.sidebar')

    {{-- 2. Main Content Wrapper --}}
    <div class="main-content">

        {{-- 3. Navbar Atas --}}
        @include('partials.dashboard-navbar')

        {{-- 4. Konten Halaman Dinamis --}}
        <main class="p-4">
            @yield('content')
        </main>

        {{-- 5. Footer --}}
        @include('partials.dashboard-footer')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
