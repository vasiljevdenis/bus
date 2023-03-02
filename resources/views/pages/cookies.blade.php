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

        <title>Cookie Policy</title>

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
                <h2 class="color-text text-center mb-5 fw-light text-uppercase">Cookie Policy</h2>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">What are Cookies?</h3>                
                <p class="color-text">A ‘cookie’ is a small piece of data sent from a website and stored on the user’s computer by the user’s web browser while the user is browsing. When you visit a site that uses cookies for the first time, a cookie is downloaded onto your computer/mobile device so that the next time you visit that site, your device will remember useful information such as items added in the shopping cart, visited pages or logging in options.</p>
                <p class="color-text">Cookies are widely used in order to make websites work, or to work more efficiently, and our site relies on cookies to optimize user experience and for features and services to function properly.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">What Cookies do we use?</h3>
                <p class="color-text">There are different types of cookies. They all work in the same way, but have minor differences and we may use the following:</p>
                <h3 class="color-text fs-5 text-start fw-normal">Session cookies</h3>
                <p class="color-text">Session cookies last only for the duration of your visit and are deleted when you close your browser. These facilitate various tasks such as allowing a website to identify that a user of a particular device is navigating from page to page, supporting website security or basic functionality.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Persistent cookies</h3>
                <p class="color-text">Persistent cookies last after you have closed your browser and allow a website to remember your actions and preferences. Sometimes persistent cookies are used by websites to provide targeted advertising based upon the browsing history of the device. We use persistent cookies to allow us to analyse customer visits to our site. These cookies help us to understand how customers arrive at and use our site so we can improve the overall service.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Strictly necessary cookies</h3>
                <p class="color-text">These cookies are essential in order to enable you to move around the website and use its features and ensuring the security of your experience. Without these cookies services you have asked for, such as applying for products and managing your accounts, cannot be provided. These cookies don’t gather information about you for the purposes of marketing.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Performance cookies</h3>
                <p class="color-text">These cookies collect information about how visitors use a web site, for instance which pages visitors go to most often, and if they get error messages from web pages. All information these cookies collect is only used to improve how a website works, the user experience and to optimise our advertising. By using our website you agree that we can place these types of cookies on your device, however you can block these cookies using your browser settings.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Functionality cookies</h3>
                <p class="color-text">These cookies allow the website to remember choices you make (such as your username). The information these cookies collect is anonymized (i.e. it does not contain your name, address etc.) and they do not track your browsing activity across other websites. By using our website you agree that we can place these types of cookies on your device, however you can block these cookies using your browser settings.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Targeting cookies</h3>
                <p class="color-text">These cookies collect several pieces of information about your browsing habits (they are usually placed by third party advertising networks). They remember that you have visited a website and this information is shared with other organisations such as media publishers. These organisations do this in order to provide you with targeted adverts more relevant to you and your interests.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Third party cookies</h3>
                <p class="color-text">Please note that third parties (including, for example, advertising networks and providers of external services like web traffic analysis services) may also use cookies, over which we have no control. These cookies are likely to be analytical/performance cookies or targeting cookies.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">How can I exercise choice regarding cookies and other types of online tracking?</h3>
                <p class="color-text">Most web browsers allow some control to restrict or block cookies through the browser settings, however if you disable cookies you may find this affects your ability to use certain parts of our website or services.</p>
                <p class="color-text text-center mt-5 mb-5">For more information about cookies visit <a href="https://www.aboutcookies.org/" class="color-text">www.aboutcookies.org</a></p>
            </div>
    </div>
    </main>        
    @include('layouts.footer')

        @vite(['resources/js/app.js'])
    </body>
</html>
