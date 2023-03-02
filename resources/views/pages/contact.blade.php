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

        <title>Contact</title>

        <link rel="canonical" href="{{ config('app.url', '') }}">
        <link rel="shortcut icon" href="{{ config('app.url', '') }}/images/{{ config('app.app_favicon', 'favicon.png') }}" type="image/x-icon">

        <!-- Styles -->
        @vite(['resources/sass/app.scss'])
    </head>
    <body>
    @include('layouts.header', ['background' => '#333333', 'active' => 'contact'])
    <main class="bg-white">
    <div class="container mb-5" style="margin-top: 6rem;">
            <div class="row justify-content-center">
                <h2 class="color-text text-center mb-5 fw-light text-uppercase">Contact us</h2>
                <div class="col-6">
                <h3 class="fs-4 color-text text-start fw-light text-uppercase">contacts</h3>
                <p class="mb-0"><a href="" class="text-decoration-none color-text">info@primebustours.com</a></p>
                        <p class="mb-5"><small>We will reply to your message within 3 business days</small></p>
                        <p style="font-size: 30px;" class="mb-0"><a href="" class="me-2"><i class="bi bi-instagram color-text"></i></a><a href=""><i class="bi bi-facebook color-text"></i></a></p>
                        <p><small>Follow us for live updates and progress</small></p>
                </div>
                <div class="col-6">
                    <h3 class="fs-4 color-text text-start fw-light text-uppercase">Have a question?</h3>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-12">
                               <input type="text" class="custom-input-light ps-2" style="margin-right: 6px;" placeholder="Enter your name"> 
                               <input type="text" class="custom-input-light" id="phone" placeholder="ХХ XXX XXXX"> 
                            </div>
                            <div class="col-12">
                                <textarea name="" id="" class="custom-textarea-light mt-2 ps-2" placeholder="Type something"></textarea><br>
                                <button type="button" class="btn btn-dark text-white text-uppercase rounded-0 ps-4 pe-4 mt-1">submit</button><br>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
    </div>
    </main>        
    @include('layouts.footer')

        @vite(['resources/js/app.js'])
        @vite(['resources/js/contact.js'])
    </body>
</html>
