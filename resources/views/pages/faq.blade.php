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

        <title>Frequently asked questions</title>

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
    @include('layouts.header', ['background' => '#333333', 'active' => ''])
    <main class="bg-white">
    <div class="container mb-5" style="margin-top: 6rem;">
        <div class="row justify-content-center">
            <h2 class="color-text text-center mb-5 fw-light text-uppercase">Frequently asked questions</h2>
            <h3 class="color-text text-center mt-5 mb-5 fs-5 text-start fw-normal text-uppercase">General questions</h3>
            <div class="row">
                <div class="col-6">
                    <div class="accordion accordion-flush" id="generalLeft" data-bs-theme="light">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Why book with Prime Bus Tours?
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#generalLeft">
                          <div class="accordion-body"></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          What are the advantages of booking online?
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#generalLeft">
                          <div class="accordion-body"></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          What time do tours start and how often do the buses run?
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#generalLeft">
                          <div class="accordion-body"></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          What time do tours start and how often do the buses run?
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#generalLeft">
                          <div class="accordion-body">
                            <p>No. You can also buy tickets at the Departure point. But due to the limited availability we can’t guarantee you a seat or full availability of our snacks and desserts. In addition to that there are some restrictions as to the alcohol beverage order. Champagne, wine, beer, whisky or cognac can be ordered only before the departure and while the bus is parked. Therefore, we advise you to book online.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-6">

                </div>
            </div>
            <h3 class="color-text text-center mt-5 mb-5 fs-5 text-start fw-normal text-uppercase">Gifts and private events</h3>
            <h3 class="color-text text-center mt-5 mb-5 fs-5 text-start fw-normal text-uppercase">food and beverage</h3>
            <h3 class="color-text text-center mt-5 mb-5 fs-5 text-start fw-normal text-uppercase">Additional information</h3>
        </div>
    </div>
    </main>        
    @include('layouts.footer')

        @vite(['resources/js/app.js'])
    </body>
</html>
