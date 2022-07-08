<x-sdg>
    <link rel="stylesheet" href="{{url('css/geenarmoede.css')}}" type="text/css"> 

    <video class="" id="video" autoplay muted src="{{url('videos/geenarmoede.mp4')}}"></video>
    
        <div class="sdg-content wrapper">
            <div class="sdg-content-wrapper">
                <div class="sdg-textbox">
                    <div class="sdg-title" ><span>1.</span> Geen armoede</div>
                    <div class="sub-title">Uitbannen van alle vormen van (extreme) armoede</div>
                    <div class="text" >
                        Einde aan de armoede gaat over het verminderen van alle vormen van armoede. De SDG-agenda vraagt speciale aandacht voor sociale bescherming, gelijke economische rechten en weerbaarheid van arme en kwetsbare groepen. Omdat armoede in Nederland er anders uit ziet dan armoede in de armste landen van de wereld is dit voor Nederland aangepast. Nederland richt zich op het voorkomen en tegengaan van armoede en problematische schulden, met speciale aandacht voor kinderen die in armoede leven.
                    </div>
                </div>
                    
                <div class="sdg-imagebox">
                    <img class="sdg" src="{{url('images/sdg1.svg')}}">
                </div>
            </div>
        </div>
        <div class="sdg-buttons wrapper">
            <button class="terug-button button" onclick="history.back()"><i class="fa-solid fa-circle-left"></i> Terug</button>
            <a href="<?php echo route('geenarmoede-opdracht'); ?>"><div class="start-button button" >Start challenge</div></a>
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
