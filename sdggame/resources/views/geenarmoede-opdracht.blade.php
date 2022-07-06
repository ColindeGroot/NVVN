<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SDG Game</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="{{url('css/main.css')}}" type="text/css"> 
        <link rel="stylesheet" href="{{url('css/background.css')}}" type="text/css"> 
        <link rel="stylesheet" href="{{url('css/sdg-opdracht.css')}}" type="text/css"> 
        <link rel="stylesheet" href="{{url('css/sdg-page.css')}}" type="text/css"> 
        <link rel="stylesheet" href="{{url('css/geenarmoede.css')}}" type="text/css"> 
        <script src="https://kit.fontawesome.com/3c35670437.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    </head>
    <body>

            <div class="container">
                <div class="opdracht-content">
                    <img class="sdg" src="{{url('images/sdg1.svg')}}">
                    <div>
                        <div class="sub-title">Opdracht:</div>
                        <div class="text">Bedenk een plan waarbij aandacht voor de mens en de gevoelens van mensen meer centraal komen te staan in de aanpak tegen armoede.</div>
                    </div>
                </div>
                <button class="terug-button button" onclick="history.back()"><i class="fa-solid fa-circle-left"></i> Terug</button>
            </div>

            @include('back')
    </body>
</html>