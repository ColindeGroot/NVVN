<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watervervuiling</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{url('css/main.css')}}" type="text/css"> 
</head>
<body class="hide-scroll" >

    <div id="loading"></div> <!-- laad icoon -->
    <div id="overlay"></div> <!-- dit verbergt de pagina voor paar seconden -->

    <h1>thema - watervervuiling</h1>
    <div class="container">
        <div id="anim1"></div>
    </div>

    <script type="text/javascript" src="{{ URL::asset('js/lottie.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>