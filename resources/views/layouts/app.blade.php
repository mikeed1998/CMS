<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap 5.3.2 --}}
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-5.3.2/css/bootstrap.min.css') }}">
    {{-- Iconos de Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    {{-- slick.js -> Sliders/carruseles con javascript --}}
    <link rel="stylesheet" href="{{ asset('vendor/slick-1.8.1/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick-1.8.1/slick/slick-theme.css') }}">
    {{-- aos.js -> transiciones con javascript --}}
    <link rel="stylesheet" href="{{ asset('vendor/aos/dist/aos.css') }}">
    {{-- leaflet.js -> Mapas customizados con javascript --}}
    <link rel="stylesheet" href="{{ asset('vendor/leaflet/leaflet.css') }}">
    {{-- summernote.js -> Editor de texto tipo TinyMCE con javascript --}}
    <link rel="stylesheet" href="{{ asset('vendor/summernote-0.8.18/summernote.min.css') }}">
    <title>
        @yield('title')
    </title>    
</head>
<body>
    @yield('main')
    {{-- JQuery - AJAX --}}
    <script src="{{ asset('js/jquery.js') }}"></script>
    {{-- anime.js -> animaciones con javascript --}}
    <script src="{{ asset('vendor/anime/lib/anime.min.js') }}"></script>
    {{-- Bootstrap 5.3.2 --}}
    <script src="{{ asset('vendor/bootstrap-5.3.2/js/bootstrap.min.js') }}"></script>
    {{-- slick.js -> Sliders/carruseles con javascript --}}
    <script src="{{ asset('vendor/slick-1.8.1/slick/slick.js') }}"></script>
    {{-- aos.js -> transiciones con javascript --}}
    <script src="{{ asset('vendor/aos/dist/aos.js') }}"></script>
    {{-- gsap.js -> animaciones con javascript --}}
    <script src="{{ asset('vendor/gsap/minified/gsap.min.js') }}"></script>
    {{-- leaflet.js -> Mapas customizados con javascript --}}
    <script src="{{ asset('vendor/leaflet/leaflet.js') }}"></script>
    {{-- summernote.js -> Editor de texto tipo TinyMCE con javascript --}}
    <script src="{{ asset('vendor/summernote-0.8.18/summernote.min.js') }}"></script>
</body>
</html>