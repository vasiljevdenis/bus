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

        <title>On Board</title>

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
    @include('layouts.header', ['background' => '#333333', 'active' => 'board'])
    <main class="bg-white">
        <div class="container-fluid ps-0 pe-0 mb-5" style="margin-top: 6rem;">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <p>
                        <span class="text-uppercase me-3 board-link" id="experience">Experience</span>
                        <span class="text-uppercase me-3 board-link" id="menu">Menu</span>
                        <span class="text-uppercase board-link active" id="guide">Guide</span>
                    </p>
                </div>
                <div class="row mt-5 pe-0 d-none" data-id="experience">
                    <div class="col-12 text-center">
                        <h2 class="color-text fw-light text-uppercase">Offer yourself one of London most luxurious <br> sightseeing bus tours with panoramic views</h2>
                    </div>
                    <div class="col-12 mt-3 mb-3 text-center">
                        <p style="color: #575757;">Booked online or just before the departure your ticket will include:</p>
                    </div>
                    <div class="container ps-5 pe-5">
                        <div class="row">
                            <div class="col-12 col-md-4 text-center color-text"><img src="/images/sofa.png" alt="" height="50"><hr><p>Personal choice of desired individual seats, sofas, and orientation within the cabin</p></div>
                            <div class="col-12 col-md-4 text-center color-text"><img src="/images/london.png" alt="" height="50"><hr><p>Discovery of London’s most notable cultural and historical sites</p></div>
                            <div class="col-12 col-md-4 text-center color-text"><img src="/images/garniture.png" alt="" height="50"><hr><p>Audio guide with pre-recorded tours in English, French, Spanish, German, Chinese and Russian</p></div>
                            <div class="col-12 col-md-4 text-center color-text"><img src="/images/build.png" alt="" height="50"><hr><p>Central departure and drop-off point near the Ritz hotel</p></div>
                            <div class="col-12 col-md-4 text-center color-text"><img src="/images/dish.png" alt="" height="50"><hr><p>Service on board</p></div>
                        </div>
                    </div>
                    <div class="container-fluid mt-5 position-relative" style="background: url(/images/night-bus.png); background-size: 100%; background-repeat: no-repeat;">
                        <div class="row position-relative" style="z-index: 2;">
                            <div class="col-12 pt-5 pb-5 text-center">
                                <h2 class="text-white mb-3 fw-light text-uppercase">You will indulge into remarkable experience,<br> never seen in London before. Tailored for you<br> and those accompanying you</h2>
                                <p style="color: #E1E1E1;">You can add to your tour experience snacks and drinks <br> from our menu selection.</p>
                                <p style="color: #E1E1E1;">You can ask for special decorations and surprises.</p>
                                <button type="button" class="btn btn-light active text-dark text-uppercase rounded-0 mt-5 ps-4 pe-4">book a tour <i class="bi bi-arrow-right"></i></button><br>
                            </div>
                        </div>
                        <div class="position-absolute" style="background: #000000; opacity: .8; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"></div>
                    </div>
                    <div class="cnontainer pt-2 pb-2">
                        <div class="row">
                            <div class="col-12 mt-3 mb-3 col-md-6 text-end pe-3" style="border-right: 1px solid #C9C9C9;">
                                <img src="/images/interior.png" alt="Interior" style="width: 80%;">
                            </div>
                            <div class="col-12 mt-3 mb-3 col-md-6 text-start ps-3 d-flex">
                                <div class="m-auto">
                                <h3 class="color-text fs-4 fw-light text-uppercase">The stylish and <br> atmospheric interior</h3>
                                <p class="color-text">You can add to your tour experience snacks and <br> drinks from our menu selection.</p>
                                </div>
                            </div>
                            <div class="col-12 mt-3 mb-3 col-md-6 text-end pe-3 d-flex">
                                <div class="m-auto">
                                <h3 class="color-text fs-4 fw-light text-uppercase">The best full-time service <br> from our excellent staff</h3>
                                <p class="color-text text-start">You can add to your tour experience snacks and <br> drinks from our menu selection.</p>
                                </div>
                            </div>
                            <div class="col-12 mt-3 mb-3 col-md-6 text-start ps-3" style="border-left: 1px solid #C9C9C9;">
                                <img src="/images/service.png" alt="Service" style="width: 80%;">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-5 pe-0">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h2 class="color-text fw-light text-uppercase">Gallery</h2>
                            </div>
                            <div class="col-12 pe-0 text-center">
                                <img src="/images/gallery.png" alt="gallery" style="width: 100%;">
                                <button type="button" class="btn btn-light active dark text-dark text-uppercase rounded-0 mt-5 ps-4 pe-4">book a tour <i class="bi bi-arrow-right"></i></button><br>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-5 pe-0">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h2 class="color-text fw-light text-uppercase">please note</h2>
                            </div>
                            <div class="col-12 pe-0 text-center">
                                <ul class="d-inline-block text-start color-text" style="list-style: none;">
                                    <li>Children below the age of 5 are not permitted on this tour.</li>
                                    <li>Children aged 15 and under must be accompanied by a paying adult.</li>
                                    <li>Wheelchair users can sit on the lower deck in the wheelchair or in a special seat nearby.</li>
                                    <li>Tickets are non-refundable.</li>
                                    <li>Please arrive 15 minutes prior to the departure time.</li>
                                    <li>Cancellation and amendments policy – please consult our FAQ page or Terms and Conditions.</li>
                                    <li>There are toilets onboard.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 d-none" data-id="menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h2 class="color-text fw-light text-uppercase">Champaign</h2>
                                <p class="color-text">Enjoy your sightseeing tour with a glass of Champagne. You can order by glass or by <br> bottle. We will serve it cooled</p>
                                <img src="/images/menu1.png" alt="" class="w-auto">
                                <img src="/images/menu2.png" alt="" class="w-auto">
                                <img src="/images/menu3.png" alt="" class="w-auto">
                            </div>
                            <div class="col-12 mt-5 text-center">
                                <h2 class="color-text fw-light text-uppercase">Wine And other <br> alcoholic beverages</h2>
                                <p class="color-text">We have a wide selection alcohol containing beverages: red and white wine, <br> Prosecco, beer, whisky and cognac. You can order by glass or by bottle</p>
                                <img src="/images/menu4.png" alt="" class="w-auto">
                                <img src="/images/menu5.png" alt="" class="w-auto">
                                <img src="/images/menu6.png" alt="" class="w-auto">
                            </div>
                            <div class="col-12 mt-5 text-center">
                                <h2 class="color-text fw-light text-uppercase">Soft & hot drinks</h2>
                                <p class="color-text">Make your choice and order soft and hot drinks from our carefully designed <br> menu. Still or sparkling water, Coca Cola with or without ice, tea, or coffee <br> will complete your experience and relax you</p>
                                <img src="/images/menu7.png" alt="" class="w-auto">
                                <img src="/images/menu8.png" alt="" class="w-auto">
                                <img src="/images/menu9.png" alt="" class="w-auto">
                            </div>
                            <div class="col-12 mt-5 text-center">
                                <h2 class="color-text fw-light text-uppercase">Snacks</h2>
                                <p class="color-text">You can select olives, sliced ham, fresh baby vegetables of your choice. <br> We will serve them on board with your favorite drink</p>
                                <img src="/images/menu10.png" alt="" class="w-auto">
                                <img src="/images/menu11.png" alt="" class="w-auto">
                                <img src="/images/menu12.png" alt="" class="w-auto">
                            </div>
                            <div class="col-12 mt-5 text-center">
                                <h2 class="color-text fw-light text-uppercase">nuts & dried fruits</h2>
                                <p class="color-text">Why not taking nuts and dried fruits?</p>
                                <img src="/images/menu13.png" alt="" class="w-auto">
                                <img src="/images/menu14.png" alt="" class="w-auto">
                                <img src="/images/menu15.png" alt="" class="w-auto">
                            </div>
                            <div class="col-12 mt-5 text-center">
                                <h2 class="color-text fw-light text-uppercase">berries</h2>
                                <p class="color-text">Always fresh and sweet. They could be the perfect accompaniment to <br> your champagne!</p>
                                <img src="/images/menu16.png" alt="" class="w-auto">
                                <img src="/images/menu17.png" alt="" class="w-auto">
                                <img src="/images/menu18.png" alt="" class="w-auto">
                            </div>
                            <div class="col-12 mt-5 text-center">
                                <h2 class="color-text fw-light text-uppercase">deserts</h2>
                                <p class="color-text">Ice cream, cakes or macaroons are great with your coffee or tea</p>
                                <img src="/images/menu19.png" alt="" class="w-auto">
                                <img src="/images/menu20.png" alt="" class="w-auto">
                                <img src="/images/menu21.png" alt="" class="w-auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 ps-5 pe-5" data-id="guide">
                <div class="col-12 col-md-6">
                    <h2 class="color-text fw-light text-uppercase">Pre-recorded audio guides are in 6 languages</h2><br><br>        
                    <div class="row">
                        <div class="col-6 color-text"><p><img class="me-3" src="/images/england.png" alt="English" width="58"><span>English</span></p></div>
                        <div class="col-6 color-text"><p><img class="me-3" src="/images/china.png" alt="Chinese" width="58"><span>Chinese</span></p></div>
                        <div class="col-6 color-text"><p><img class="me-3" src="/images/germany.png" alt="German" width="58"><span>German</span></p></div>
                        <div class="col-6 color-text"><p><img class="me-3" src="/images/russia.png" alt="Russian" width="58"><span>Russian</span></p></div>
                        <div class="col-6 mb-3 color-text"><p><img class="me-3" src="/images/spain.png" alt="Spanish" width="58"><span>Spanish</span></p></div>
                        <div class="col-6 mb-3 color-text"><p><img class="me-3" src="/images/france.png" alt="French" width="58"><span>French</span></p></div>
                    </div>
                    <br><br>
                    <p style="color: #575757;">Headphones are available during the tour. Or you can enjoy chatting with your friends and colleagues to the sound of our atmospheric lounge music.</p>
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <img src="/images/guide.png" alt="Guide" style="width: 80%;" class="m-auto">
                </div>
                </div>
            </div>
        </div>
    </main>        
    @include('layouts.footer')

        @vite(['resources/js/app.js'])
        @vite(['resources/js/board.js'])
    </body>
</html>
