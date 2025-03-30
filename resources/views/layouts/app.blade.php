<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informasi')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
        <div class="header-logo">Belajar Laravel</div>
        <nav class="navbar">
            <a href="#">Beranda</a>
            <a href="#">Tentang</a>
            <a href="#">Kontak</a>
        </nav>
    </header>
    <div class="content">
        @yield('content')
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#">Archive</a>
                <licy href="#">Privacy Policy</a>
                <a href="#">Terms</a>
            </div>
            <div class="footer-socials">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="footer-copyright">
                © 2025 Delas Princisa Hakim. All Rights Reserved.
            </div>
        </div>
    </footer>
</body>
</html>
