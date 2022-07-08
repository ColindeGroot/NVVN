<x-sdg>
    <link rel="stylesheet" href="{{url('css/vrede.css')}}" type="text/css">
    
    <video id="video" autoplay muted src="{{url('videos/vrede.mp4')}}"></video>

        
    <div class="sdg-content wrapper">
        <div class="sdg-content-wrapper">
            <div class="sdg-textbox">
                <div class="sdg-title" ><span>16.</span> Vrede, justitie en sterke publieke diensten</div>
                <div class="sub-title">Bevorderen van veiligheid, publieke diensten en recht voor iedereen</div>
                <div class="text" >
                Voor veiligheid en vrede moeten alle vormen van geweld en de sterfte die daarvan het gevolg is verminderd worden. Speciale aandacht gaat uit naar geweld tegen kinderen en naar georganiseerde misdaad. In een veilige samenleving heeft iedereen toegang tot het rechtssysteem, en wordt corruptie tegengegaan. Het ervaren van onveiligheid, met gevoelens van kwetsbaarheid en onzekerheid  kunnen een grote impact hebben op het persoonlijke leven.
                </div>
            </div>
                
            <div class="sdg-imagebox">
                <img class="sdg" src="{{url('images/sdg16.svg')}}">
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

    // voeg slide out class toe aan video
    function SlideOut(){
        video.classList.add("slide-out");
        video.style.animationDuration = "1s";
    }

    // voeg slide in animatie toe aan video
    function SlideIn(){
        video.classList.add("slide-in");
        video.style.animationDuration = "1s";
    }

    // verwijder slide in animatie van video, zidat slide out animatie zijn ding kan doen
    function RemoveSlideIn(){
        video.classList.remove("slide-in");
    }

    // wanneer pagina opent, geef slide-in class aan video, 
    // stel een tijd in wanneer de video wordt verborgen, 
    // stel tijd in wanneer slide-in class wordt verwijderd, 
    // stel tijd in wanneer slide-out animatie wordt gebruikt,
    // stel tijd in wanneer de overlay achter de animatie zich verbergt,
    // stel tijd in wanneer de scroll hide functie beindigt.
    window.onload = () => setTimeout(SlideIn), setTimeout(hideVideo, 4000), setTimeout(RemoveSlideIn, 3500), setTimeout(SlideOut, 3500), setTimeout(hide, 3500), setTimeout(hideScroll, 5000);
</script>