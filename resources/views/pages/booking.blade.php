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

        <title>Book a tour</title>

        <link rel="canonical" href="{{ config('app.url', '') }}">
        <link rel="shortcut icon" href="{{ config('app.url', '') }}/images/{{ config('app.app_favicon', 'favicon.png') }}" type="image/x-icon">

        <!-- Styles -->
        @vite(['resources/sass/app.scss'])
        @vite(['resources/sass/booking.scss'])
    </head>
    <body style="background: #F8F8F8;">
    @include('layouts.header', ['background' => '#333333', 'active' => ''])
    <main>
        <div class="container mb-5" style="margin-top: 6rem;">
            <div class="row">
                <div class="col-12">
                <div class="progress position-relative" role="progressbar" aria-label="Booking progress" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-main " style="width: 0%"></div>
                    <div class="checkpoint active position-absolute top-50 start-0 translate-middle">1</div>
                    <div class="checkpoint position-absolute top-50 translate-middle" style="left: 33%;">2</div>
                    <div class="checkpoint position-absolute top-50 translate-middle" style="left: 67%;">3</div>
                    <div class="checkpoint position-absolute top-50 start-100 translate-middle">4</div>                
                </div>
                </div>
            </div>
        </div>
        <div class="container bg-white pt-5 pb-5 mb-5">
            <div class="row justify-content-center w-50 ms-auto me-auto">
                <h2 class="color-text text-center fw-light text-uppercase">Book a tour</h2>
                <div class="col-12">
                    <div class="mb-3">
                        <div id="itinerary"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <div id="guests"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <div id="table"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <div id="date"></div>                 
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <div id="time"></div> 
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label color-text" for="flexCheckDefault">
                        Default checkbox
                        </label>
                    </div>
                </div>
                <div class="col-12"><hr></div>                
                <div class="col-6">
                    <div class="mb-3">
                        <label for="basic-url" class="form-label color-text">Promo code</label>
                        <div class="input-group">
                            <input disabled type="text" class="form-control input-booking" id="basic-url" aria-describedby="basic-addon3" placeholder="Happy new year">
                            <button disabled class="btn btn-dark text-white text-uppercase rounded-0" type="button" id="button-addon2">apply</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="basic-url" class="form-label color-text">Gift certificate</label>
                        <div class="input-group">
                            <input disabled type="text" class="form-control input-booking" id="basic-url" aria-describedby="basic-addon3" placeholder="Certificate number">
                            <button disabled class="btn btn-dark text-white text-uppercase rounded-0" type="button" id="button-addon2">apply</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-dark text-white text-uppercase rounded-0 mt-5 ps-5 pe-5" type="button" id="button-addon2">Next</button>
                </div>
            </div>
        </div>
        <div class="container bg-white pt-5 pb-5 mb-5 d-none">
            <div class="row justify-content-center">
                <h2 class="color-text text-center fw-light text-uppercase">seat selection</h2>
            </div>
        </div>
        <div class="container bg-white pt-5 pb-5 mb-5 d-none">
            <div class="row justify-content-center">
                <h2 class="color-text text-center fw-light text-uppercase">food & BEVERAGE SELECTION</h2>
            </div>
        </div>
        <div class="container bg-white pt-5 pb-5 mb-5 d-none">
            <div class="row justify-content-center">
                <h2 class="color-text text-center fw-light text-uppercase">personal & payment info</h2>
            </div>
        </div>
    </main>        
    @include('layouts.footer')

        @vite(['resources/js/app.js'])
        @vite(['resources/js/booking.js'])
    </body>
</html>
