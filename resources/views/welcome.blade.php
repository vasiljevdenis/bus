<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/sass/app.scss'])
    </head>
    <body class="antialiased">
    <header>
        <nav class="navbar navbar-expand-md bg-body-tertiary fixed-top bg-opacity-50" role="navigation" style="background-color: #0D0D0D80 !important;">
            <div class="container-fluid ps-lg-5 pe-lg-5">
                <a class="navbar-brand order-2 order-md-1" href="/"><img src="/images/logo.svg" alt="Логотип" class="w-100"
                        style="max-width: 250px;"></a>
                <button class="navbar-toggler order-1 order-md-2 border-0" type="button"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start order-md-2" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close ps-0" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link text-white me-md-2" href="#" id="url">On Board</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white mt-2 mt-md-0" href="#" id="download">Itineraries</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white mt-2 mt-md-0" href="#" id="download">Private Hire</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white mt-2 mt-md-0" href="#" id="download">Gifts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white mt-2 mt-md-0" href="#" id="download">Сontact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white mt-2 mt-md-0 ms-md-2" href="#" id="download">EN <i class="ai-chevron-down"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark btn btn-light rounded-0 mt-2 mt-md-0 ms-md-2" href="#" id="download">Book a tour</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid vh-100" style="background: url(images/preview.png); background-size: 100%; background-repeat: no-repeat;">
            <div class="row h-100">
                <div class="col-12 mt-auto mb-auto p-5">
                    <h1 class="text-uppercase fw-light">Luxury sightseeing <br> bus tours</h1>
                    <p class="text-white">A unique and one of a kind luxury, sightseeing <br> experience there is and ever will be in London</p>
                    <button type="button" class="btn btn-light text-dark text-uppercase rounded-0">Learn more</button>
                </div>
            </div>
        </div>
    </main>        
    <footer>
    <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
    </footer>

        @vite(['resources/js/app.js'])
    </body>
</html>
