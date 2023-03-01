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

        <title>Itineraries</title>

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
    @include('layouts.header', ['background' => '#333333', 'active' => 'itineraries'])
    <main class="bg-white">
        <div class="container-fluid ps-0 pe-0 mb-5" style="margin-top: 6rem;">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h2 class="color-text fw-light text-uppercase">itineraries</h2>
                    <p class="color-text">Prime Bus Tours is a unique and one of a kind luxury, sightseeing experience there <br> is and ever will be in London. You are invited to discover London and enjoy its views <br> in the most comfortable and relaxing atmosphere with a glass of champaign or any <br> other drink of your choice, accompanied by snacks or desert.</p>
                    <p>
                        <span class="text-uppercase me-3 board-link active" id="westminster">Westminster</span>
                        <span class="text-uppercase board-link" id="tower">Tower of london</span>
                    </p>
                </div>
                <div class="row pe-0 mt-5" data-id="westminster">
                    <div class="container ps-5 pe-5">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <img src="/images/westminster.png" alt="" class="w-100">
                            </div>
                            <div class="col-12 col-md-3 mt-3">
                                <ul style="list-style: none;" class="color-text">
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">1</span> Wellington Arch</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">5</span> Albert Memorial</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">9</span> Big Ben</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">13</span> London Eye</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">17</span> National Gallery</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-3 mt-3">
                                <ul style="list-style: none;" class="color-text">
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">2</span> Victoria and Albert Museum</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">6</span> Kensington Gardens</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">10</span> Palace of Westminster</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">14</span> Whitehall</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">18</span> Piccadilly Circus</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-3 mt-3">
                                <ul style="list-style: none;" class="color-text">
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">3</span> Natural History Museum</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">7</span> Buckingham Palace</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">11</span> Jewel Tower</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">15</span> Trafalgar Square</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-3 mt-3">
                                <ul style="list-style: none;" class="color-text">
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">4</span> Royal Albert Hall</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">8</span> Westminster Abbey</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">12</span> Lambeth Palace</li>
                                    <li class="mt-1 mb-2"><span class="list-g-itineraries d-inline-block text-center">16</span> Nelson’s Column</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-12 mt-5 mb-5 text-center">
                                <p class="color-text ms-auto me-auto pb-5" style="max-width: 635px; border-bottom: 1px solid #DCDCDC;"><span class="float-start text-uppercase fw-semibold">Duration</span><span class="float-end">About 1 hour 20 minutes</span></p>
                                <p class="color-text ms-auto me-auto pb-5" style="max-width: 635px; border-bottom: 1px solid #DCDCDC;"><span class="float-start text-uppercase fw-semibold">Languages</span><span class="float-end">English, German, French, Spanish, Chinese, Russian</span></p>
                                <p class="color-text ms-auto me-auto pb-5" style="max-width: 635px; border-bottom: 1px solid #DCDCDC;"><span class="float-start text-uppercase fw-semibold">Departure point</span><span class="float-end">Piccadilly, Green Park corner, near the Ritz Hotel</span></p>
                                <p class="color-text ms-auto me-auto pb-5" style="max-width: 635px; border-bottom: 1px solid #DCDCDC;"><span class="float-start text-uppercase fw-semibold">Departure time*</span><span class="float-end"><span style="background: #F0F0F0; border-radius: 7px; padding: 5px 10px; margin-right: 1rem;">10:00</span><span style="background: #F0F0F0; border-radius: 7px; padding: 5px 10px; margin-right: 1rem;">16:00</span><span style="background: #F0F0F0; border-radius: 7px; padding: 5px 10px;">20:00</span> <br> <small>(*subject to change, please consult the web-site when booking)</small></span></p>
                                <p class="color-text text-start ms-auto me-auto" style="max-width: 635px;"><small>*Please be aware that the tour starts strictly at the time shown in your reservation confirmation. Unfortunately, due to regulatory restriction we cannot wait for late passengers. Please allow yourself 10 minutes before the schedule tour time to arrive at the departure point for an ontime boarding.</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-5 pe-0">
                        <div class="row">
                            <div class="col-12">
                                <img src="/images/westminster2.png" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 pe-0 d-none" data-id="tower">
                <div class="container ps-5 pe-5">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <img src="/images/tower.png" alt="" class="w-100">
                            </div>
                            <div class="col-12 col-md-3 mt-3">
                                <ul style="list-style: none;" class="color-text">
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">1</span> Spencer House</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">5</span> Trafalgar Square</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">9</span> Dover House</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">13</span> London Eye</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">17</span> St Clement Danes/li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">21</span> Bank of England Museum</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">25</span> Tower Bridge</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-3 mt-3">
                                <ul style="list-style: none;" class="color-text">
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">2</span> St James’s Palace</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">6</span> Nelson’s Column</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">10</span> Downing Street</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">14</span> Two Temple Place</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">18</span> Royal Courts of Justice</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">22</span> Royal Exchange</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">26</span> Southwark Cathedral</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-3 mt-3">
                                <ul style="list-style: none;" class="color-text">
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">3</span> Diana Princess Of Wales Memorial Walk</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">7</span> Old Admiralty Building</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">11</span> Big Ben</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">15</span> Somerset House</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">19</span> Temple Church</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">23</span> The Monument</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">27</span> London Bridge</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-3 mt-3">
                                <ul style="list-style: none;" class="color-text">
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">4</span> St James’s Park</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">8</span> Horse Guards Parade</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">12</span> Westminster Abbey</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">16</span> St Mary le Strand</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">20</span> St Paul’s Cathedral</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">24</span> Tower of London</li>
                                    <li class="mt-1 mb-2"><span class="list-v-itineraries d-inline-block text-center">28</span> Waterloo Bridge</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-12 mt-5 mb-5 text-center">
                                <p class="color-text ms-auto me-auto pb-5" style="max-width: 635px; border-bottom: 1px solid #DCDCDC;"><span class="float-start text-uppercase fw-semibold">Duration</span><span class="float-end">About 1 hour 20 minutes</span></p>
                                <p class="color-text ms-auto me-auto pb-5" style="max-width: 635px; border-bottom: 1px solid #DCDCDC;"><span class="float-start text-uppercase fw-semibold">Languages</span><span class="float-end">English, German, French, Spanish, Chinese, Russian</span></p>
                                <p class="color-text ms-auto me-auto pb-5" style="max-width: 635px; border-bottom: 1px solid #DCDCDC;"><span class="float-start text-uppercase fw-semibold">Departure point</span><span class="float-end">Piccadilly, Green Park corner, near the Ritz Hotel</span></p>
                                <p class="color-text ms-auto me-auto pb-5" style="max-width: 635px; border-bottom: 1px solid #DCDCDC;"><span class="float-start text-uppercase fw-semibold">Departure time*</span><span class="float-end"><span style="background: #F0F0F0; border-radius: 7px; padding: 5px 10px; margin-right: 1rem;">10:00</span><span style="background: #F0F0F0; border-radius: 7px; padding: 5px 10px; margin-right: 1rem;">16:00</span><span style="background: #F0F0F0; border-radius: 7px; padding: 5px 10px;">20:00</span> <br> <small>(*subject to change, please consult the web-site when booking)</small></span></p>
                                <p class="color-text text-start ms-auto me-auto" style="max-width: 635px;"><small>*Please be aware that the tour starts strictly at the time shown in your reservation confirmation. Unfortunately, due to regulatory restriction we cannot wait for late passengers. Please allow yourself 10 minutes before the schedule tour time to arrive at the departure point for an ontime boarding.</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-5 pe-0">
                        <div class="row">
                            <div class="col-12">
                                <img src="/images/tower2.png" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>        
    @include('layouts.footer')

        @vite(['resources/js/app.js'])
        @vite(['resources/js/itineraries.js'])
    </body>
</html>
