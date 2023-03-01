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

        <title>COVID 19 Policy</title>

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
                <h2 class="color-text text-center mb-5 fw-light text-uppercase">COVID 19 Policy</h2>
                <p class="color-text text-center mb-5">We recommend that you wear a face covering where applicable.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">What Prime Bus Tours is doing to keep people safe?</h3>
                <p class="color-text">Although national lockdown rules have now been lifted in the UK, we are still ensuring that all of our customers are safe and comfortable when travelling with us. We have introduced additional protocols and measures. Below are the steps and procedures we are continuing to take to enhance hygiene standards and take into consideration the social distancing aspect in this new era of travel:</p>
                <ul class="color-text ps-5">
                    <li>our double-decker bus has always maintained a high standard of maintenance and cleanliness, it will continue to undergo a thorough deep clean at the start of every tour in accordance with the government or other institutionally verified cleanliness guidelines;</li>
                    <li>our staff and drivers are fully trained on hygiene protocols and procedures to make sure our guests feel safe travelling with us;</li>
                    <li>all Prime Bus Tours staff, including drivers and crew, undergo a routine temperature check at the start of every shift/tour;</li>
                    <li>we no longer provide complimentary face masks to our customers. However, you are very welcome to wear your own mask;</li>
                    <li>there are hand sanitizing facilities onboard our double decker bus;</li>
                    <li>keeping social distance while queueing for boarding;</li>
                    <li>we encourage, but do not enforce the social distancing rules for customers as well as staff, and have signs posted throughout the bus as a friendly reminder;</li>
                    <li>to minimize the contact between our staff and customers, we have a seamless online booking process with no printing required – simply show your digital ticket at boarding.</li>
                </ul>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">COVID – 19 Risk Assessment</h3>
                <p class="color-text">Prime Bus Tours has taken the following steps to manage the risk of Covid-19 across the business:</p>
                <ul class="color-text ps-5">
                    <li>our COVID – 19 policies and Risk Assessment are implemented in line with existing government guidelines;</li>
                    <li>employees are working from home wherever possible - only employees where remote working is not possible for operational reasons or home circumstances are working on company premises;</li>
                    <li>workplace is organised to support social distancing – workstations are arranged so that social distancing can be adhered to; posters displayed to remind employees, customers etc. of social distancing;</li>
                    <li>increased cleaning frequency throughout all our premises and double-decker using appropriate disinfectant in line with the COSHH assessment;</li>
                    <li>ventilation on site and buses increased as much as possible;</li>
                    <li>information and training provided to employees on risks and controls in the workplace through training courses, posters, signs, announcements, and Risk Assessment;</li>
                    <li>pro-active monitoring in place to ensure that employees are adhering to controls and that control measures are adequate and effective.</li>
                </ul>
                <p class="color-text">We are continually reviewing our risk assessments and policies on Covid-19 to ensure they reflect our working practices and government guidance.</p>
            </div>
    </div>
    </main>        
    @include('layouts.footer')

        @vite(['resources/js/app.js'])
    </body>
</html>