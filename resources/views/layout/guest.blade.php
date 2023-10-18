<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="#"><img src="{{ asset('images/EBSCS1.png') }}" alt="Logo" width='20%' height='20%'></a>
        
        <!-- Toggler for Small Screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menu Items on the Right -->
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#prestasi">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#internship">Internship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#project">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#publikasi">Publikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item ms-3">
                    <a href="/login">
                    <button class="btn btn-outline-success">Login</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    
    @yield('content')

    <footer class="bg-dark py-4 text-white mt-4 footer">
        <div class="container">
            Mahasiswa Ilmu Komputer | Copyright @ {{date("Y")}} ESQ Business School
        </div>
    </footer>

    <script src="/js/bootstrap.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>