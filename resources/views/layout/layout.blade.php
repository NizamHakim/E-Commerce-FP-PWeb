<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.Store</title>
    <link rel="stylesheet" type="text/css" href={{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
@if (Route::currentRouteName() == 'home')
    <div id="page" class="site page-home">
@else
    <div id="page" class="site">
@endif
        @include('layout.components.mobile-nav')

        <header>
            @include('layout.components.topnav')
            @include('layout.components.navbar')
            @include('layout.components.all-departments')
        </header>

        @yield('content')

        <footer>
            @include('layout.components.newsletter')
            @include('layout.components.widgets')
            @include('layout.components.footer-info')
        </footer>

        @include('layout.components.mobile-menu')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src={{ asset('js/script.js') }}></script>
</body>
</html>