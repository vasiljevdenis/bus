<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

        <title>Project closed for non-payment</title>

        <link rel="canonical" href="{{ config('app.url', '') }}">
        <link rel="shortcut icon" href="{{ config('app.url', '') }}/images/{{ config('app.app_favicon', 'favicon.png') }}" type="image/x-icon">

        <!-- Styles -->
        @vite(['resources/sass/app.scss'])
    </head>
    <body>
        <div class="container-fluid">
            <div class="row w-100 vh-100">
                <div class="col-12 text-center m-auto">
                    <h1>Проект закрыт за неуплату</h1>
                    <h3>Project closed for non-payment</h3>
                    <h4 class="fs-1">¯\_(ツ)_/¯</h4>
                </div>
            </div>
        </div>
    </body>
</html>
