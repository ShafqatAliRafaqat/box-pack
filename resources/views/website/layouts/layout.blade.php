<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{ asset('website/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('website/favicon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('website/assets/css/vendor/1-sanitize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('website/assets/css/vendor/2-bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="{{ asset('website/assets/css/styles.min.css') }}">
    </head>

    <body data-spy="scroll" data-target="#net-nav" data-offset="50">
        <!-- Main Page Header -->
        <header class="mainHeader">
            @include('website.layouts.header')
        </header>
        <!-- Main Area -->
        <main>
            @yield('main_content')
        </main>
        <!-- Footer -->
        <footer>
            @include('website.layouts.footer')
        </footer>

        <!-- JavaScript Files -->
        <script src="{{ asset('website/assets/js/vendor/1-jquery-3.4.0.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/vendor/2-bootstrap.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/vendor/3-popper.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/vendor/4-simplebar.min.js') }}"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="{{ asset('website/assets/js/scripts.min.js') }}"></script>
        <script>
            AOS.init({
                disable: 'mobile'
            });

        </script>
    </body>

</html>
