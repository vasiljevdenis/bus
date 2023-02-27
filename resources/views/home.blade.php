<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{ config('app.name', '') }}">
        <meta property="og:url" content="{{ config('app.url', '') }}">
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="{{ config('app.app_logo', '') }}">
        <meta property="og:image:width" content="630">
        <meta property="og:image:height" content="630">

        <title>Home</title>

        <link rel="canonical" href="{{ config('app.url', '') }}">
        <link rel="shortcut icon" href="{{ config('app.url', '') }}/images/{{ config('app.app_favicon', 'favicon.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/sass/app.scss'])
    </head>
    <body>
    @include('layouts.header', ['background' => '#0D0D0D80'])
    <main>
        <div class="container-fluid vh-100" style="background: url(images/preview.png); background-size: 100%; background-repeat: no-repeat;">
            <div class="row h-100">
                <div class="col-12 mt-auto mb-auto p-5">
                    <h1 class="text-uppercase fw-light">Luxury sightseeing <br> bus tours</h1>
                    <p class="text-white mt-3">A unique and one of a kind luxury, sightseeing <br> experience there is and ever will be in London</p>
                    <button type="button" class="btn btn-light text-dark text-uppercase rounded-0 mt-4 ps-4 pe-4">Learn more</button><br>
                    <a href="" class="text-decoration-none">
                    <div class="d-inline-block">
                    <div class="rounded-circle d-flex mt-5" style="width: 84px; height: 84px; border: 1px dashed rgba(255, 255, 255, 0.5);">
                        <div class="rounded-circle m-auto d-flex" style="width: 60px; height: 60px; background: url(images/bus_rounded.png); background-size: 100%; background-repeat: no-repeat;">
                            <i class="ai-play m-auto text-white"></i>
                        </div>
                    </div>
                    </div>
                    <span class="text-white d-inline ms-3">Video about bus tour</span>
                    </a>
                </div>
            </div>
        </div>
    </main>        
    @include('layouts.footer')

        @vite(['resources/js/app.js'])
    </body>
</html>
