<nav id="sidebar" class="sidebar bg-dark">
    <div class="d-flex flex-column p-3">
        <a href="/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img src="{{ asset('assets/icon/ic-logo.png') }}" alt="Logo" width="40" height="40" class="me-2">
            <span class="fs-4">Admin Panel</span>
        </a>
        <hr class="text-white">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('blog') }}" class="nav-link {{ request()->is('blog*') ? 'active' : '' }}">
                    <i class="bi bi-newspaper"></i>
                    Kelola Blog
                </a>
            </li>
            <li>
                <a href="{{ route('prestasi.index') }}"
                    class="nav-link {{ request()->is('dashboard/prestasi*') ? 'active' : '' }}">
                    <i class="bi bi-trophy-fill"></i>
                    Kelola Prestasi
                </a>
            </li>
            {{-- Tambahkan menu lain di sini --}}
        </ul>
        <hr class="text-white">
        <div>
            <a href="/" class="btn btn-sm btn-outline-light w-100" target="_blank">
                <i class="bi bi-box-arrow-up-right me-2"></i>Lihat Website
            </a>
        </div>
    </div>
</nav>
