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
        <div class="container bg-white pt-5 pb-5 mb-5 step">
            <div class="row justify-content-center w-75 ms-auto me-auto">
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
                    <label for="dateInp" class="color-text form-label color-text disabled" style="margin-bottom: 2px; font-weight: 500;">Date</label>
                        <div class="dropdown">
                            <input disabled type="text" id="dateInp" class="dhtmlx-booking w-100 dropdown-toggle ps-2" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" placeholder="Select date" style="border: 1px solid #D1D1D1;">
                            <div class="dropdown-menu bg-white">
                                <div id="date"></div>       
                            </div>
                        </div>          
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <div id="time"></div> 
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input disabled class="form-check-input" type="checkbox" value="" id="disabilities">
                        <label class="form-check-label color-text" for="disabilities">
                        Guests with disabilities
                        </label>
                    </div>
                </div>
                <div class="col-12"><hr></div>                
                <div class="col-6">
                    <div class="mb-3">
                        <label for="promo" class="form-label color-text disabled">Promo code</label>
                        <div class="input-group">
                            <input disabled type="text" class="form-control input-booking" id="promo" aria-describedby="basic-addon3" placeholder="Happy new year">
                            <button disabled class="btn btn-dark text-white text-uppercase rounded-0" type="button" id="promoBtn">apply</button>
                        </div>
                        <div class="form-text error-text d-none">Promo code is incorrect</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="gift" class="form-label color-text disabled">Gift certificate</label>
                        <div class="input-group">
                            <input disabled type="text" class="form-control input-booking" id="gift" aria-describedby="basic-addon3" placeholder="Certificate number">
                            <button disabled class="btn btn-dark text-white text-uppercase rounded-0" type="button" id="giftBtn">apply</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button disabled class="next btn btn-dark text-white text-uppercase rounded-0 mt-5 ps-5 pe-5" type="button">Next</button>
                </div>
            </div>
        </div>
        <div class="container d-none pt-5 pb-5 mb-5 step">
            <div class="row justify-content-center">
                <div class="col-9 ps-0 step">
                    <div class="bg-white p-5">
                    <h2 class="color-text text-center fw-light text-uppercase">seat selection</h2>
                    <p class="color-text">Upper deck</p>
                    <hr>
                    <div class="w-100 position-relative">
                        <img src="/images/seats1.png" alt="" class="w-100">
                        <img src="/images/group-A.png" alt="" class="position-absolute seat" style="top: 4.5%; left: 7.6%; width: 4.55%;" id="11A">
                        <img src="/images/group-B.png" alt="" class="position-absolute seat" style="top: 4.5%; left: 3.5%; width: 4.1%;" id="11B">
                        <img src="/images/group-C.png" alt="" class="position-absolute seat" style="top: 50.4%; left: 3.5%; width: 4.1%;" id="11C">
                        <img src="/images/group-D.png" alt="" class="position-absolute seat" style="top: 73%; left: 7.6%; width: 4.55%;" id="11D">
                        <img src="/images/10-D.png" alt="" class="position-absolute seat" style="top: 3.5%; left: 15.3%; width: 4.5%;" id="10D">
                        <img src="/images/10-E.png" alt="" class="position-absolute seat" style="top: 26.8%; left: 15.3%; width: 4.5%;" id="10E">
                        <img src="/images/10-A.png" alt="" class="position-absolute seat" style="top: 3.5%; left: 23.5%; width: 4.5%;" id="10A">
                        <img src="/images/10-B.png" alt="" class="position-absolute seat" style="top: 26.8%; left: 23.5%; width: 4.5%;" id="10B">
                        <img src="/images/5-A.png" alt="" class="position-absolute seat" style="top: 3.5%; left: 56.2%; width: 4.5%;" id="5A">
                        <img src="/images/5-B.png" alt="" class="position-absolute seat" style="top: 27%; left: 56.2%; width: 4.5%;" id="5B">
                        <img src="/images/5-A.png" alt="" class="position-absolute seat" style="top: 3.5%; left: 64.3%; width: 4.5%;" id="4A">
                        <img src="/images/5-B.png" alt="" class="position-absolute seat" style="top: 27%; left: 64.3%; width: 4.5%;" id="4B">
                        <img src="/images/5-A.png" alt="" class="position-absolute seat" style="top: 3.5%; left: 72.5%; width: 4.5%;" id="3A">
                        <img src="/images/5-B.png" alt="" class="position-absolute seat" style="top: 27%; left: 72.5%; width: 4.5%;" id="3B">
                        <img src="/images/5-A.png" alt="" class="position-absolute seat" style="top: 3.5%; left: 80.7%; width: 4.5%;" id="2A">
                        <img src="/images/5-B.png" alt="" class="position-absolute seat" style="top: 27%; left: 80.7%; width: 4.5%;" id="2B">
                        <img src="/images/5-A.png" alt="" class="position-absolute seat" style="top: 3.5%; left: 88.9%; width: 4.5%;" id="1A">
                        <img src="/images/5-B.png" alt="" class="position-absolute seat" style="top: 27%; left: 88.9%; width: 4.5%;" id="1B">
                        <img src="/images/C.png" alt="" class="position-absolute seat" style="top: 67%; left: 15.3%; width: 4.5%;" id="10C">
                        <img src="/images/C.png" alt="" class="position-absolute seat" style="top: 67%; left: 23.5%; width: 4.5%;" id="9C">
                        <img src="/images/C.png" alt="" class="position-absolute seat" style="top: 67%; left: 31.7%; width: 4.5%;" id="8C">
                        <img src="/images/C.png" alt="" class="position-absolute seat" style="top: 67%; left: 39.8%; width: 4.5%;" id="7C">
                        <img src="/images/C.png" alt="" class="position-absolute seat" style="top: 67%; left: 48%; width: 4.5%;" id="6C">
                        <img src="/images/C.png" alt="" class="position-absolute seat" style="top: 67%; left: 56.2%; width: 4.5%;" id="5C">
                        <img src="/images/C.png" alt="" class="position-absolute seat" style="top: 67%; left: 64.3%; width: 4.5%;" id="4C">
                        <img src="/images/C.png" alt="" class="position-absolute seat" style="top: 67%; left: 72.5%; width: 4.5%;" id="3C">
                        <img src="/images/C.png" alt="" class="position-absolute seat" style="top: 67%; left: 80.7%; width: 4.5%;" id="2C">
                        <img src="/images/C.png" alt="" class="position-absolute seat taken" style="top: 67%; left: 88.9%; width: 4.5%;" id="1C">
                    </div>
                    <p class="color-text mt-5">Lower deck</p>
                    <hr>
                    <div class="w-100 position-relative">
                        <img src="/images/seats2.png" alt="" class="w-100">
                        <img src="/images/C.png" alt="" class="position-absolute seat" style="top: 3.5%; left: 57.2%; width: 4.5%;" id="12C">
                        <img src="/images/A.png" alt="" class="position-absolute seat" style="top: 3.5%; left: 65.3%; width: 4.5%;" id="12A">
                        <img src="/images/D.png" alt="" class="position-absolute seat" style="top: 67%; left: 57.2%; width: 4.5%;" id="12D">
                        <img src="/images/B.png" alt="" class="position-absolute seat" style="top: 67%; left: 65.3%; width: 4.5%;" id="12B">
                    </div>
                    <h3 class="color-text fs-4 text-center fw-light text-uppercase mt-3 text-decoration-underline">Upgrade or change seats</h3>
                    <div class="text-center">
                        <button disabled class="next btn btn-dark text-white text-uppercase rounded-0 mt-5 ps-5 pe-5" type="button">Continue</button>
                    </div>
                    </div>
                </div>
                <div class="col-9 ps-0 d-none step">
                    <div class="bg-white p-5">
                        <h2 class="color-text text-center fw-light text-uppercase">food & BEVERAGE SELECTION</h2>
                        <p class="color-text text-center">(Extra charges apply)</p>
                        <h3 class="fs-5 color-text text-center fw-semibold text-uppercase">soft drinks</h3>
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="1" data-id="1"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Still water</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">180 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£0.49</div>
                            <hr class="mt-1 mb-2">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="1" data-id="2"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Sparkling water</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">180 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£0.49</div>
                            <hr class="mt-1 mb-2">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="1" data-id="3"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Coca-cola</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">180 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£0.49</div>
                            <hr class="mt-1 mb-2">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="1" data-id="4"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Milk</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">180 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£0.49</div>
                            <hr class="mt-1 mb-2">
                        </div>
                        <h3 class="fs-5 color-text text-center fw-semibold text-uppercase mt-5">hot drinks</h3>
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="2" data-id="1"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Green tea</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">180 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£0.49</div>
                            <hr class="mt-1 mb-2">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="2" data-id="2"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Black tea</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">180 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£0.49</div>
                        </div>
                        <h3 class="fs-5 color-text text-center fw-semibold text-uppercase mt-5">Beer</h3>
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="3" data-id="1"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Kronenbourg 1664 (France)</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">180 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£0.49</div>
                        </div>
                        <h3 class="fs-5 color-text text-center fw-semibold text-uppercase mt-5">sparkling wine (by glass)</h3>
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="4" data-id="1"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Henri Giraud Hommage á François Hémart Grand Cru N.V.</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">200 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£45</div>
                            <hr class="mt-1 mb-2">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="4" data-id="2"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Prosecco Extra Dry Villa Domiziano N.V.</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">200 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£45</div>
                        </div>
                        <h3 class="fs-5 color-text text-center fw-semibold text-uppercase mt-5">wine (by Glass)</h3>
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="5" data-id="1"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Riesling, Karl Schaefer, Germany 2017</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">200 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£45</div>
                            <hr class="mt-1 mb-2">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="5" data-id="2"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Serre Nuove, Tenuta dell’ Ornellaia Italy 2017</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">200 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£45</div>
                        </div>
                        <h3 class="fs-5 color-text text-center fw-semibold text-uppercase mt-5">sparkling wine (by bottle)</h3>
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="6" data-id="1"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Henri Giraud Hommage á François Hémart Grand Cru N.V.</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">900 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£180</div>
                            <hr class="mt-1 mb-2">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="6" data-id="2"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Prosecco Extra Dry Villa Domiziano N.V.</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">900 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£180</div>
                        </div>
                        <h3 class="fs-5 color-text text-center fw-semibold text-uppercase mt-5">wine (by bottle)</h3>
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="7" data-id="1"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Riesling, Karl Schaefer, Germany 2017</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">900 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£180</div>
                            <hr class="mt-1 mb-2">
                            <div class="col-2 d-flex align-items-center justify-content-start ps-0" data-parent="7" data-id="2"><button class="btn btn-pink text-uppercase rounded-0 ps-5 pe-5" type="button" data-id="add">ADD</button></div>
                            <div class="col-6 d-flex align-items-center color-text justify-content-start">Serre Nuove, Tenuta dell’ Ornellaia Italy 2017</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end">900 ml</div>
                            <div class="col-2 text-end d-flex align-items-center color-text justify-content-end pe-0">£180</div>
                        </div>
                    <div class="text-center">
                        <button class="next btn btn-dark text-white text-uppercase rounded-0 mt-5 ps-5 pe-5" type="button">submit booking</button>
                    </div>
                    </div>
                </div>
                <div class="col-9 ps-0 d-none step">
                    <div class="bg-white p-5">
                        <h2 class="color-text text-center fw-light text-uppercase">personal & payment info</h2>
                        <p class="color-text fw-semibold">1. Personal information</p>
                        <form id="bookingForm">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="custom-input-light w-75 ps-2 mb-1" placeholder="Booking name" style="border: 1px solid #D1D1D1;">
                            </div>
                            <div class="col-6">
                                <input type="text" class="custom-input-light w-75 mt-1 mb-1" placeholder="Telephone" id="phone" style="border: 1px solid #D1D1D1;">
                            </div>
                            <div class="col-6">
                                <input type="text" class="custom-input-light w-75 ps-2 mt-1 mb-1" placeholder="Email" style="border: 1px solid #D1D1D1;">
                            </div>
                            <div class="col-6">
                                <input type="text" class="custom-input-light w-75 ps-2 mt-1 mb-1" placeholder="Repeat email" style="border: 1px solid #D1D1D1;">
                            </div>
                        </div>
                        </form>
                        <p class="color-text fw-semibold mt-5">2. Select a payment method</p>
                        <div class="row pt-3 pb-5" style="border: 1px solid #D1D1D1;">
                            <p class="color-text">Credit/Debit Card</p>
                            <div class="col-12 mb-5">
                                <img src="/images/visa.png" alt="" class="w-100" style="max-width: 90px;">
                                <img src="/images/mastercard.png" alt="" class="w-100" style="max-width: 61px;">
                            </div>
                            <div class="col-6">
                                <input type="text" class="custom-input-light w-75 ps-2 mt-1 mb-1" placeholder="CARD NUMBER" style="border: 1px solid #D1D1D1;">
                            </div>
                            <div class="col-6">
                                <input type="text" class="custom-input-light w-75 ps-2 mt-1 mb-1" placeholder="CARDHOLDER’S NAME" style="border: 1px solid #D1D1D1;">
                            </div>
                            <div class="col-6">
                                <input type="text" class="custom-input-light w-75 ps-2 mt-1 mb-1" placeholder="EXPIRY DATE" style="border: 1px solid #D1D1D1;">
                            </div>
                            <div class="col-6">
                                <input type="text" class="custom-input-light w-75 ps-2 mt-1 mb-1" placeholder="SECURITY CODE" style="border: 1px solid #D1D1D1;">
                            </div>
                        </div>
                        <div class="row mt-3 pt-3" style="border: 1px solid #D1D1D1;">
                            <p class="color-text">Use a different payment method</p>
                            <div class="col-12 mb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                <img src="/images/applepay.png" alt="" class="w-100" style="max-width: 58px;">
                                </label>
                            </div>
                            </div>
                            <div class="col-12 mb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                <img src="/images/googlepay.png" alt="" class="w-100" style="max-width: 60px;">
                                </label>
                            </div>
                            </div>
                            <div class="col-12 mb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                <img src="/images/paypal.png" alt="" class="w-100" style="max-width: 88px;">
                                </label>
                            </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="personal">
                            <label class="form-check-label color-text" for="personal">
                            I agree to the processing of personal data
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="terms">
                            <label class="form-check-label color-text" for="terms">
                            I agree to the Terms and Conditions
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="mailings">
                            <label class="form-check-label color-text" for="mailings">
                            I agree to receive notifications and mailings
                            </label>
                        </div>
                        </div>
                    <div class="text-center">
                        <button disabled class="btn btn-dark text-white text-uppercase rounded-0 mt-5 ps-5 pe-5" type="button" id="button-addon2">Pay</button>
                    </div>
                    </div>
                </div>
                <div class="col-3 pe-0" id="summary">
                    <div class="bg-white ps-3 pe-3 pt-5 pb-5">
                    <h2 class="fs-4 color-text text-center fw-light text-uppercase">booking summary</h2>
                    <hr>
                    <h2 class="fs-5 color-text fw-semibold text-uppercase">tour info</h2>
                    <div class="row">
                        <div class="col-6">
                            <p class="color-text">Itinerary</p>
                        </div>
                        <div class="col-6">
                            <p class="color-text fw-semibold text-end" data-id="itinerary" data-value="">Central London sightseeing tour</p>
                        </div>
                        <div class="col-6">
                            <p class="color-text">Guests</p>
                        </div>
                        <div class="col-6">
                            <p class="color-text fw-semibold text-end" data-id="guests" data-value="">4 guests</p>
                        </div>
                        <div class="col-6">
                            <p class="color-text">Date</p>
                        </div>
                        <div class="col-6">
                            <p class="color-text fw-semibold text-end" data-id="date" data-value="">12.07.2022</p>
                        </div>
                        <div class="col-6">
                            <p class="color-text">Departure time</p>
                        </div>
                        <div class="col-6">
                            <p class="color-text fw-semibold text-end" data-id="time" data-value="">16:00</p>
                        </div>
                    </div>
                    <hr>
                    <h2 class="fs-5 color-text fw-semibold text-uppercase">Seats</h2>
                    <div class="row" data-id="seats"></div>
                    <hr data-id="food" class="d-none">                    
                    <h2 class="fs-5 color-text fw-semibold text-uppercase d-none" data-id="food">food & BEVERAGE</h2>
                    <div class="row d-none" data-id="food"></div>
                    <hr>                    
                    <div class="row">
                        <div class="col-8">
                            <p class="color-text">Promo code <i class="bi bi-info-circle"></i></p>
                        </div>
                        <div class="col-4">
                            <p class="fw-semibold text-end">£50</p>
                        </div>
                        <div class="col-8">
                            <h2 class="fs-5 color-text fw-semibold text-uppercase">total seats</h2>
                        </div>
                        <div class="col-4">
                            <p class="color-text fw-semibold text-end" data-id="totalSeats" data-value=""></p>
                        </div>
                        <div class="col-8">
                            <p>Including VAT 0%</p>
                        </div>
                        <div class="col-4">
                            <p class="fw-semibold text-end">£0</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <p class="color-text">Gift certificate</p>
                        </div>
                        <div class="col-4">
                            <p class="color-text fw-semibold text-end">-£50</p>
                        </div>
                        <div class="col-8">
                            <h2 class="fs-5 color-text fw-semibold text-uppercase">total to pay</h2>
                        </div>
                        <div class="col-4">
                            <p class="color-text fw-semibold text-end">£250</p>
                        </div>
                        <div class="col-8">
                            <p>Including VAT 0%</p>
                        </div>
                        <div class="col-4">
                            <p class="fw-semibold text-end">£0</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>        
    @include('layouts.footer')
 <script src="/dhtmlx-combobox/suite.min.js"></script>
        @vite(['resources/js/app.js'])
        @vite(['resources/js/booking.js'])
    </body>
</html>
