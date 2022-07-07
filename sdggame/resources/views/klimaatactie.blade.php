<x-sdg>
    <link rel="stylesheet" href="{{url('css/klimaatactie.css')}}" type="text/css"> 
        
    <video id="video" autoplay muted src="{{url('videos/klimaatactie.mp4')}}"></video>

    <div class="sdg-content wrapper">
        <div class="sdg-content-wrapper">
            <div class="sdg-textbox">
                <div class="sdg-title" ><span>13.</span> Klimaatactie</div>
                <div class="sub-title">Hoe gaan we klimaatverandering tegen?</div>
                <div class="text" >
                Door doelen te stellen voor weerbaarheid en klimaatadaptatie, nationaal klimaatbeleid, en middelen om bewustwording en draagvlak te creëren voor de klimaatmaatregelen. Met het Deltaprogramma, dat Nederland moet beschermen tegen overstromingen en de gevolgen van extreem weer, kunnen we belangrijke stappen maken. Ook de vermindering van uitstoot van broeikasgassen, waarbij energiebesparing en hernieuwbare energie spelen een belangrijke rol.
                </div>
            </div>
                
            <div class="sdg-imagebox">
                <img class="sdg" src="{{url('images/sdg13.svg')}}">
            </div>
        </div>
    </div>
    <div class="sdg-buttons wrapper">
        <button class="terug-button button" onclick="history.back()"><i class="fa-solid fa-circle-left"></i> Terug</button>
        <a href="#"><div class="start-button button" >Start challenge</div></a>
    </div>
</x-sdg>

<script type="text/javascript">  
    var video  = document.getElementById("video");

    // function om de overgang te hiden
    function hideVideo() {
    video.style.display= "none";
    }

    // wanneer pagina opent, speel overgang af, verberg achtergrond en scroll tijdelijk
    window.onload = () => setTimeout(hideVideo, 3500), setTimeout(hide, 3000), setTimeout(hideScroll, 5000);
</script>  