<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Sehat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Navbar Transparan */
        .navbar {
            background-color: rgba(255, 255, 255, 0.5); /* Transparan dengan sedikit warna putih */
        }

        /* Hero Section dengan Background Image */
        .hero-section {
            background-image: url('{{ asset("assets/images/padthai-shrimp-black-bowl-with-eggs-spring-onion-seasoning-wooden-table.jpg") }}');
            background-size: cover;
            background-position: center;
            height: 100vh; /* Ukuran penuh layar */
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Memberikan efek transparan hitam */
            z-index: 1;
        }
        .hero-section .content {
            position: relative;
            z-index: 2;
        }
    </style>
</head>
<body>

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/2__1_-removebg-preview.png') }}" alt="Logo" height="25" class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Image and Headline -->
    <div class="hero-section">
        <div class="content">
            <h1 class="display-4">Inspirasi Masakan Harian Ada di Sini!</h1>
            <p class="lead">Jelajahi inspirasi masakan tanpa batas, dengan NutriSmart</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
