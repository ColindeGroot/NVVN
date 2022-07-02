<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SDG Game</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="{{url('css/main.css')}}" type="text/css"> 
        <link rel="stylesheet" href="{{url('css/background.css')}}" type="text/css"> 
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/3c35670437.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @include('nav')

        @include('back')

        {{ $slot }}

        <script type="text/javascript" src="{{ URL::asset('js/lottie.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    </body>
</html>