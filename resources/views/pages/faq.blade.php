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
                        <h2 class="accordion-header" id="flush-heading1">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                          Why book with Prime Bus Tours?
                          </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#generalLeft">
                          <div class="accordion-body"></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading2">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                          What are the advantages of booking online?
                          </button>
                        </h2>
                        <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#generalLeft">
                          <div class="accordion-body"></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading3">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                          What time do tours start and how often do the buses run?
                          </button>
                        </h2>
                        <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#generalLeft">
                          <div class="accordion-body"></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading4">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                          What time do tours start and how often do the buses run?
                          </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#generalLeft">
                          <div class="accordion-body">
                            <p>No. You can also buy tickets at the Departure point. But due to the limited availability we can’t guarantee you a seat or full availability of our snacks and desserts. In addition to that there are some restrictions as to the alcohol beverage order. Champagne, wine, beer, whisky or cognac can be ordered only before the departure and while the bus is parked. Therefore, we advise you to book online.</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading5">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                          Are the buses wheelchair accessible?
                          </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#generalLeft">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>                      
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading6">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                          Is it permitted to smoke on the bus?
                          </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#generalLeft">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading7">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                          Is there a toilet on the bus?
                          </button>
                        </h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#generalLeft">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading8">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                          Do you accept pets?
                          </button>
                        </h2>
                        <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#generalLeft">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading9">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                          Do you have discounts for senior people?
                          </button>
                        </h2>
                        <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#generalLeft">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading10">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                          Do you have a special baby seat?
                          </button>
                        </h2>
                        <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#generalLeft">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading11">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                          Is there a guide available in my language?
                          </button>
                        </h2>
                        <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#generalLeft">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading12">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
                          Can I cancel my ticket?
                          </button>
                        </h2>
                        <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#generalLeft">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading13">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
                          Can I get refund if I missed the tour?
                          </button>
                        </h2>
                        <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#generalLeft">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading14">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse14" aria-expanded="false" aria-controls="flush-collapse14">
                          If I received the massage that the tour was canceled, do I receive a refund?
                          </button>
                        </h2>
                        <div id="flush-collapse14" class="accordion-collapse collapse" aria-labelledby="flush-heading14" data-bs-parent="#generalLeft">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading15">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse15" aria-expanded="false" aria-controls="flush-collapse15">
                          Can I change the date (or time) of my tour?
                          </button>
                        </h2>
                        <div id="flush-collapse15" class="accordion-collapse collapse" aria-labelledby="flush-heading15" data-bs-parent="#generalLeft">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>

                    </div>
                </div>
                <div class="col-6">
                <div class="accordion accordion-flush" id="generalRight" data-bs-theme="light">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading16">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse16" aria-expanded="false" aria-controls="flush-collapse16">
                          On what days do the tours happen?
                          </button>
                        </h2>
                        <div id="flush-collapse16" class="accordion-collapse collapse" aria-labelledby="flush-heading16" data-bs-parent="#generalRight">
                          <div class="accordion-body"></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading17">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse17" aria-expanded="false" aria-controls="flush-collapse17">
                          How long does the tour take?
                          </button>
                        </h2>
                        <div id="flush-collapse17" class="accordion-collapse collapse" aria-labelledby="flush-heading17" data-bs-parent="#generalRight">
                          <div class="accordion-body"></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading18">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse18" aria-expanded="false" aria-controls="flush-collapse18">
                          Where is the departure point?
                          </button>
                        </h2>
                        <div id="flush-collapse18" class="accordion-collapse collapse" aria-labelledby="flush-heading18" data-bs-parent="#generalRight">
                          <div class="accordion-body"></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading19">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse19" aria-expanded="false" aria-controls="flush-collapse19">
                          Where does the tour end?
                          </button>
                        </h2>
                        <div id="flush-collapse19" class="accordion-collapse collapse" aria-labelledby="flush-heading19" data-bs-parent="#generalRight">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading20">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse20" aria-expanded="false" aria-controls="flush-collapse20">
                          Is there space to put suitcases or strollers?
                          </button>
                        </h2>
                        <div id="flush-collapse20" class="accordion-collapse collapse" aria-labelledby="flush-heading20" data-bs-parent="#generalRight">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>                      
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading21">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse21" aria-expanded="false" aria-controls="flush-collapse21">
                          Do the tours stop in front of different landmarks during the journey?
                          </button>
                        </h2>
                        <div id="flush-collapse21" class="accordion-collapse collapse" aria-labelledby="flush-heading21" data-bs-parent="#generalRight">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading22">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse22" aria-expanded="false" aria-controls="flush-collapse22">
                          Do you offer a discount for groups?
                          </button>
                        </h2>
                        <div id="flush-collapse22" class="accordion-collapse collapse" aria-labelledby="flush-heading22" data-bs-parent="#generalRight">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading23">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse23" aria-expanded="false" aria-controls="flush-collapse23">
                          What is the child ticketing policy?
                          </button>
                        </h2>
                        <div id="flush-collapse23" class="accordion-collapse collapse" aria-labelledby="flush-heading23" data-bs-parent="#generalRight">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading24">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse24" aria-expanded="false" aria-controls="flush-collapse24">
                          How do I purchase my ticket?
                          </button>
                        </h2>
                        <div id="flush-collapse24" class="accordion-collapse collapse" aria-labelledby="flush-heading24" data-bs-parent="#generalRight">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading25">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse25" aria-expanded="false" aria-controls="flush-collapse25">
                          How do I pay?
                          </button>
                        </h2>
                        <div id="flush-collapse25" class="accordion-collapse collapse" aria-labelledby="flush-heading25" data-bs-parent="#generalRight">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading26">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse26" aria-expanded="false" aria-controls="flush-collapse26">
                          How can I be sure I won’t end up sharing my table with strangers?
                          </button>
                        </h2>
                        <div id="flush-collapse26" class="accordion-collapse collapse" aria-labelledby="flush-heading26" data-bs-parent="#generalRight">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading27">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse27" aria-expanded="false" aria-controls="flush-collapse27">
                          I have booked online. How do I get my ticket?
                          </button>
                        </h2>
                        <div id="flush-collapse27" class="accordion-collapse collapse" aria-labelledby="flush-heading27" data-bs-parent="#generalRight">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading28">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse28" aria-expanded="false" aria-controls="flush-collapse28">
                          Will you contact me if there is a problem?
                          </button>
                        </h2>
                        <div id="flush-collapse28" class="accordion-collapse collapse" aria-labelledby="flush-heading28" data-bs-parent="#generalRight">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading29">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse29" aria-expanded="false" aria-controls="flush-collapse29">
                          Do I need to print out the ticket and bring it with me?
                          </button>
                        </h2>
                        <div id="flush-collapse29" class="accordion-collapse collapse" aria-labelledby="flush-heading29" data-bs-parent="#generalRight">
                          <div class="accordion-body">
                            <p></p>
                          </div>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
            <h3 class="color-text text-center mt-5 mb-5 fs-5 text-start fw-normal text-uppercase">Gifts and private events</h3>
            <div class="row">
                <div class="col-6">
                    <div class="accordion accordion-flush" id="giftsLeft" data-bs-theme="light">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading30">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse30" aria-expanded="false" aria-controls="flush-collapse30">
                          I want to offer a Prime Bus Tour as a gift, how can I do this?
                          </button>
                        </h2>
                        <div id="flush-collapse30" class="accordion-collapse collapse" aria-labelledby="flush-heading30" data-bs-parent="#giftsLeft">
                          <div class="accordion-body"></div>
                        </div>
                      </div>

                    </div>
                </div>
                <div class="col-6">
                <div class="accordion accordion-flush" id="giftsRight" data-bs-theme="light">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading31">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse31" aria-expanded="false" aria-controls="flush-collapse31">
                          Is it possible to hire Prime bus for a private event?
                          </button>
                        </h2>
                        <div id="flush-collapse31" class="accordion-collapse collapse" aria-labelledby="flush-heading31" data-bs-parent="#giftsRight">
                          <div class="accordion-body"></div>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
            <h3 class="color-text text-center mt-5 mb-5 fs-5 text-start fw-normal text-uppercase">food and beverage</h3>
            <div class="row">
                <div class="col-6">
                    <div class="accordion accordion-flush" id="foodLeft" data-bs-theme="light">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading31">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse32" aria-expanded="false" aria-controls="flush-collapse32">
                          Is it possible to order drinks on the bus?
                          </button>
                        </h2>
                        <div id="flush-collapse32" class="accordion-collapse collapse" aria-labelledby="flush-heading32" data-bs-parent="#foodLeft">
                          <div class="accordion-body"></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading33">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse33" aria-expanded="false" aria-controls="flush-collapse33">
                          Do you take any food allergies or intolerances into account?
                          </button>
                        </h2>
                        <div id="flush-collapse33" class="accordion-collapse collapse" aria-labelledby="flush-heading33" data-bs-parent="#foodLeft">
                          <div class="accordion-body"></div>
                        </div>
                      </div>

                    </div>
                </div>
                <div class="col-6">
                <div class="accordion accordion-flush" id="foodRight" data-bs-theme="light">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading34">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse34" aria-expanded="false" aria-controls="flush-collapse34">
                          Is it possible to order more alcoholic drinks on board?
                          </button>
                        </h2>
                        <div id="flush-collapse34" class="accordion-collapse collapse" aria-labelledby="flush-heading34" data-bs-parent="#foodRight">
                          <div class="accordion-body"></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading35">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse35" aria-expanded="false" aria-controls="flush-collapse35">
                          Do you have a children’s menu?
                          </button>
                        </h2>
                        <div id="flush-collapse35" class="accordion-collapse collapse" aria-labelledby="flush-heading35" data-bs-parent="#foodRight">
                          <div class="accordion-body"></div>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
            <h3 class="color-text text-center mt-5 mb-5 fs-5 text-start fw-normal text-uppercase">Additional information</h3>
            <div class="row">
                <div class="col-6">
                    <div class="accordion accordion-flush" id="additionalLeft" data-bs-theme="light">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading36">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse36" aria-expanded="false" aria-controls="flush-collapse36">
                          How can I share my experience with Prime Bus Tours?
                          </button>
                        </h2>
                        <div id="flush-collapse36" class="accordion-collapse collapse" aria-labelledby="flush-heading36" data-bs-parent="#additionalLeft">
                          <div class="accordion-body"></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading37">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse37" aria-expanded="false" aria-controls="flush-collapse37">
                          Will you use my personal information to send me promotional material?
                          </button>
                        </h2>
                        <div id="flush-collapse37" class="accordion-collapse collapse" aria-labelledby="flush-heading37" data-bs-parent="#additionalLeft">
                          <div class="accordion-body"></div>
                        </div>
                      </div>

                    </div>
                </div>
                <div class="col-6">
                <div class="accordion accordion-flush" id="additionalRight" data-bs-theme="light">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading38">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse38" aria-expanded="false" aria-controls="flush-collapse38">
                          How secure are my personal details?
                          </button>
                        </h2>
                        <div id="flush-collapse38" class="accordion-collapse collapse" aria-labelledby="flush-heading38" data-bs-parent="#additionalRight">
                          <div class="accordion-body"></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading39">
                          <button class="accordion-button text-uppercase collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse39" aria-expanded="false" aria-controls="flush-collapse39">
                          What happens if I arrive late for a departure?
                          </button>
                        </h2>
                        <div id="flush-collapse39" class="accordion-collapse collapse" aria-labelledby="flush-heading39" data-bs-parent="#additionalRight">
                          <div class="accordion-body"></div>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>        
    @include('layouts.footer')

        @vite(['resources/js/app.js'])
    </body>
</html>
