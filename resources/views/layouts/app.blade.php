<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- @yield('title') akan diisi oleh halaman turunan --}}
    <title>@yield('title', 'Aplikasi Laravel') | Belajar Laravel</title>

    {{-- Vite akan mengelola aset CSS dan JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Slot untuk CSS tambahan khusus halaman tertentu --}}
    @stack('styles')

    {{-- Dark Mode Styles --}}
    <style>
        html {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Smooth transition untuk semua elemen */
        * {
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        /* Alert styling untuk dark mode */
        [data-bs-theme="dark"] .alert {
            background-color: #212529;
            border-color: #495057;
            color: #fff;
        }

        /* Card styling untuk dark mode */
        [data-bs-theme="dark"] .card {
            background-color: #212529;
            border-color: #495057;
            color: #fff;
        }

        [data-bs-theme="dark"] .card-header {
            background-color: #343a40 !important;
            border-color: #495057;
        }

        [data-bs-theme="dark"] .card-footer {
            background-color: #343a40 !important;
            border-color: #495057;
        }

        /* Footer styling untuk dark mode */
        [data-bs-theme="dark"] footer {
            background-color: #212529 !important;
        }

        /* Navbar styling untuk dark mode */
        [data-bs-theme="dark"] .navbar {
            background-color: #1a1d21 !important;
            border-bottom: 1px solid #495057;
        }

        [data-bs-theme="dark"] .navbar-brand {
            color: #ff6b6b !important;
        }

        [data-bs-theme="dark"] .nav-link {
            color: #adb5bd !important;
        }

        [data-bs-theme="dark"] .nav-link:hover {
            color: #fff !important;
        }

        /* Text color untuk dark mode */
        [data-bs-theme="dark"] body {
            background-color: #1a1d21;
            color: #e9ecef;
        }

        [data-bs-theme="dark"] a {
            color: #6ea8fe;
        }

        [data-bs-theme="dark"] a:hover {
            color: #adbdff;
        }

        /* Form elements untuk dark mode */
        [data-bs-theme="dark"] .form-control,
        [data-bs-theme="dark"] .form-select {
            background-color: #343a40;
            border-color: #495057;
            color: #fff;
        }

        [data-bs-theme="dark"] .form-control:focus,
        [data-bs-theme="dark"] .form-select:focus {
            background-color: #495057;
            border-color: #6ea8fe;
            color: #fff;
        }

        /* Breadcrumb untuk dark mode */
        [data-bs-theme="dark"] .breadcrumb {
            background-color: #343a40;
            border-radius: 0.375rem;
            padding: 0.75rem 1rem;
        }

        [data-bs-theme="dark"] .breadcrumb-item {
            color: #adb5bd;
        }

        [data-bs-theme="dark"] .breadcrumb-item a {
            color: #6ea8fe;
        }

        /* Badge styling untuk dark mode */
        [data-bs-theme="dark"] .badge {
            background-color: #6c757d !important;
        }

        /* Button outline styles untuk dark mode */
        [data-bs-theme="dark"] .btn-outline-primary {
            color: #6ea8fe;
            border-color: #6ea8fe;
        }

        [data-bs-theme="dark"] .btn-outline-primary:hover {
            background-color: #6ea8fe;
            border-color: #6ea8fe;
        }

        [data-bs-theme="dark"] .btn-outline-danger {
            color: #ff6b6b;
            border-color: #ff6b6b;
        }

        [data-bs-theme="dark"] .btn-outline-danger:hover {
            background-color: #ff6b6b;
            border-color: #ff6b6b;
        }

        /* Toggle button styles */
        #themeToggle {
            font-size: 1.2rem;
            padding: 0.5rem 0.75rem;
        }

        #themeToggle:hover {
            transform: scale(1.1);
        }

        /* Smooth animation untuk toggle button */
        #themeIcon {
            display: inline-block;
            transition: transform 0.3s ease;
        }

        #themeToggle:active #themeIcon {
            transform: rotate(20deg);
        }
    </style>
</head>
<body>
    {{-- ===== NAVIGASI ===== --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger" href="{{ url('/') }}">
                🔴 Belajar Laravel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('portofolio') }}">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                    {{-- Dark Mode Toggle --}}
                    <li class="nav-item ms-3">
                        <button class="btn btn-outline-light btn-sm" id="themeToggle" title="Toggle dark/light mode">
                            <span id="themeIcon">🌙</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ===== KONTEN UTAMA ===== --}}
    <main class="container my-4">
        {{-- Flash message untuk notifikasi --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- @yield('content') akan diisi oleh konten halaman turunan --}}
        @yield('content')
    </main>

    {{-- ===== FOOTER ===== --}}
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">
                &copy; {{ date('Y') }} Belajar Laravel. Dibuat dengan ❤️ menggunakan Laravel 13.
            </p>
        </div>
    </footer>

    {{-- Slot untuk JavaScript tambahan khusus halaman tertentu --}}
    @stack('scripts')

    {{-- Dark Mode Toggle Script --}}
    <script>
        // Inisialisasi dark mode pada saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            const htmlElement = document.documentElement;
            const themeToggle = document.getElementById('themeToggle');
            const themeIcon = document.getElementById('themeIcon');

            // Ambil preferensi dari localStorage atau system preference
            function initTheme() {
                const savedTheme = localStorage.getItem('theme-preference');

                if (savedTheme) {
                    htmlElement.setAttribute('data-bs-theme', savedTheme);
                } else {
                    // Jika tidak ada preferensi tersimpan, gunakan system preference
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                    htmlElement.setAttribute('data-bs-theme', prefersDark ? 'dark' : 'light');
                    localStorage.setItem('theme-preference', prefersDark ? 'dark' : 'light');
                }
                updateIcon();
            }

            // Update icon berdasarkan theme saat ini
            function updateIcon() {
                const currentTheme = htmlElement.getAttribute('data-bs-theme');
                themeIcon.textContent = currentTheme === 'dark' ? '☀️' : '🌙';
            }

            // Toggle dark mode
            themeToggle.addEventListener('click', function() {
                const currentTheme = htmlElement.getAttribute('data-bs-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

                // Update HTML attribute
                htmlElement.setAttribute('data-bs-theme', newTheme);

                // Simpan preferensi ke localStorage
                localStorage.setItem('theme-preference', newTheme);

                // Update icon dengan animasi
                updateIcon();

                // Tambah animasi kecil
                themeIcon.style.transform = 'rotate(360deg)';
                setTimeout(() => {
                    themeIcon.style.transform = 'rotate(0deg)';
                }, 300);
            });

            // Inisialisasi theme pada saat halaman dimuat
            initTheme();

            // Listen untuk perubahan system preference (jika user berubah OS dark mode)
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(e) {
                if (!localStorage.getItem('theme-preference')) {
                    const newTheme = e.matches ? 'dark' : 'light';
                    htmlElement.setAttribute('data-bs-theme', newTheme);
                    updateIcon();
                }
            });
        });
    </script>
</body>
</html>

