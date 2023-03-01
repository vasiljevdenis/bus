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

        <title>Career</title>

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
        <div class="container-fluid mb-5" style="margin-top: 6rem;">
            <div class="row justify-content-center">
                <h2 class="color-text text-center fw-light text-uppercase">Exhibit your talents in a dynamic tourism sphere</h2>
                <div class="col-10 mt-5 p-3 border">                    
                    <div class="container">
                        <div class="row">
                            <div class="col-4 d-flex align-content-between flex-wrap">
                                <div class="w-100">
                                    <h3 class="fs-4 color-text fw-light text-uppercase">Board attendant</h3>
                                </div>
                                <div class="w-100">
                                    <p class="mb-0 color-text">Full-time</p>
                                    <p class="color-text">$150+ a day</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <h4 class="color-text fw-light text-uppercase">Job Description</h4>
                                <p class="color-text">Few restaurants excel at every aspect of the dining experience, from masterfully prepared cuisine to exceptional service, but for over 25 years The Capital Grille has done just that.</p>
                                <p class="color-text">Team members enjoy being part of one of the country’s most comfortably sophisticated restaurants and thrive in a nurturing work environment that encourages growth.</p>
                            </div>
                            <div class="col-4 text-end d-flex align-content-between flex-wrap">
                                <div class="w-100 text-end">
                                    <p>6 days ago</p>
                                </div>
                                <div class="w-100 text-end">
                                    <button data-bs-toggle="modal" data-bs-target="#Modal" type="button" class="btn btn-dark text-white text-uppercase rounded-0 mt-4 ps-4 pe-4">Learn more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 mt-3 p-3 border">                    
                    <div class="container">
                        <div class="row">
                            <div class="col-4 d-flex align-content-between flex-wrap">
                                <div class="w-100">
                                    <h3 class="fs-4 color-text fw-light text-uppercase">Sales agent</h3>
                                </div>
                                <div class="w-100">
                                    <p class="mb-0 color-text">Full-time</p>
                                    <p class="color-text">$150+ a day</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <h4 class="color-text fw-light text-uppercase">Job Description</h4>
                                <p class="color-text">Few restaurants excel at every aspect of the dining experience, from masterfully prepared cuisine to exceptional service, but for over 25 years The Capital Grille has done just that.</p>
                                <p class="color-text">Team members enjoy being part of one of the country’s most comfortably sophisticated restaurants and thrive in a nurturing work environment that encourages growth.</p>
                            </div>
                            <div class="col-4 text-end d-flex align-content-between flex-wrap">
                                <div class="w-100 text-end">
                                    <p>6 days ago</p>
                                </div>
                                <div class="w-100 text-end">
                                    <button data-bs-toggle="modal" data-bs-target="#Modal" type="button" class="btn btn-dark text-white text-uppercase rounded-0 mt-4 ps-4 pe-4">Learn more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>        
    <div class="modal" tabindex="-1" id="Modal" aria-labelledby="ModalLabel" aria-hidden="true" data-bs-theme="light">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h2 class="color-text fw-light text-uppercase w-100" id="ModalLabel">Board attendant</h2>
        <button type="button" class="btn-close ms-2" data-bs-dismiss="modal" aria-label="Close" style="filter: none;"></button>
      </div>
      <div class="modal-body p-5">
        <p class="color-text"><span class="me-3">Full-time</span><span>$150+ a day</span></p>
        <h3 class="fs-4 color-text fw-light text-uppercase w-100">Job Description</h3>
        <p class="color-text">Few restaurants excel at every aspect of the dining experience, from masterfully prepared cuisine to exceptional service, but for over 25 years The Capital Grille has done just that.</p>
        <p class="color-text">Team members enjoy being part of one of the country’s most comfortably sophisticated restaurants and thrive in a nurturing work environment that encourages growth.</p>
        <h3 class="fs-4 mt-2 color-text fw-light text-uppercase w-100">Duties & Reponsibilities:</h3>
        <ul class="color-text">
            <li>Enters and prepares the room for cleaning.</li>
            <li>Dusts the room and furniture.</li>
            <li>Replenishes guestroom and bath supplies.</li>
            <li>Cleans the bathroom.</li>
            <li>Cleans the closet.</li>
            <li>Vacuums and racks the carpet.</li>
            <li>Checks and secures the rooms.</li>
            <li>Replenish amenities according to the operational standards.</li>
            <li>Deliver and retrieve items on loan to guests e.g. iron and ironing boards</li>
            <li>Ensure security of guest rooms and privacy of guests.</li>
            <li>Perform rotation cleaning duties (e.g. steam clean carpets, spring cleaning, super cleaning etc.) as required</li>
            <li>Cleans guest bathroom/bedroom/floor corridor.</li>
        </ul>
        <h3 class="fs-4 mt-2 color-text fw-light text-uppercase w-100">Job Description</h3>
        <p class="color-text">Few restaurants excel at every aspect of the dining experience, from masterfully prepared cuisine to exceptional service, but for over 25 years The Capital Grille has done just that.</p>
        <p class="color-text">Team members enjoy being part of one of the country’s most comfortably sophisticated restaurants and thrive in a nurturing work environment that encourages growth.</p>
        <h3 class="fs-4 mt-2 color-text fw-light text-uppercase w-100">Education</h3>
        <p class="color-text">Diploma or Degree Holder from Hospitality College</p>
        <h3 class="fs-4 mt-2 color-text fw-light text-uppercase w-100">Experience</h3>
        <p class="color-text">Previous hotel-related experience is required</p>
        <h3 class="fs-4 mt-2 color-text fw-light text-uppercase w-100">Benefits</h3>
        <ul class="color-text">
            <li>Food & Accommodation is provided by the company.</li>
            <li>PF & ESIC benefit.</li>
        </ul>
        <div>
            <button data-bs-dismiss="modal" aria-label="Close" type="button" class="float-start btn btn-dark text-white text-uppercase rounded-0 mt-4 ps-4 pe-4">apply</button>
            <p class="float-end mt-4 mb-0">Posted 6 days ago</p>
        </div>
      </div>
    </div>
  </div>
</div>
    @include('layouts.footer')

        @vite(['resources/js/app.js'])
    </body>
</html>
