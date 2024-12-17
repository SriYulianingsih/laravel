<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Aplikasi Ponpes')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #eaf2f8; /* Warna biru muda */
        }
        .navbar {
            background-color: #007bff; /* Warna biru utama */
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .table thead {
            background-color: #0056b3; /* Warna biru tua */
            color: #fff;
        }
        .btn-primary {
            background-color: #007bff; /* Tombol biru */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Tombol biru lebih gelap saat hover */
            border-color: #0056b3;
        }
        .footer {
            background-color: #0056b3; /* Footer biru */
            color: #fff;
            padding: 15px 0;
        }
        .card-header {
            background-color: #007bff; /* Header card biru */
            color: #fff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('laporans.index') }}">Ponpes Nurul Hidayah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('santri.index') }}">Santri</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="footer text-center">
        <p>&copy; {{ date('Y') }} Ponpes Nurul Hidayah - All Rights Reserved</p>
    </footer>

    <!--untuk Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
