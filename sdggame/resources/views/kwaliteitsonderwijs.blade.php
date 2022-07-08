<x-sdg>
<link rel="stylesheet" href="{{url('css/kwaliteitsonderwijs.css')}}" type="text/css"> 

<video id="video" autoplay muted src="{{url('videos/kwaliteitsonderwijs.mp4')}}"></video>
    
        <div class="sdg-content wrapper">
            <div class="sdg-content-wrapper">
                <div class="sdg-textbox">
                    <div class="sdg-title" ><span>4.</span> Kwaliteitsonderwijs</div>
                    <div class="sub-title">Inclusief, gelijkwaardig en kwalitatief onderwijs voor iedereen</div>
                    <div class="text" >
                        Kwaliteitsonderwijs gaat over dat iedereen toegang heeft tot goed onderwijs. Passende en scholing is voor alle leeftijdsgroepen en in alle levensfasen van belang, van kleuter- en basisonderwijs tot beroeps- en hoger onderwijs, en daarna via ‘leven lang ontwikkelen’. Vaardigheden van leerlingen worden voor een groot deel bepaald door de kwaliteit van het aangeboden onderwijs. Bovendien zorgt onderwijs ervoor dat de bevolking nu en in de toekomst over de goede vaardigheden beschikt om te functioneren in een kennismaatschappij en goed kunnen meedraaien in de maatschappij.
                    </div>
                </div>
                    
                <div class="sdg-imagebox">
                    <img class="sdg" src="{{url('images/sdg4.svg')}}">
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
    window.onload = () => setTimeout(SlideIn), setTimeout(hideVideo, 5500), setTimeout(RemoveSlideIn, 5000), setTimeout(SlideOut, 5000), setTimeout(hide, 5000), setTimeout(hideScroll, 5000);
</script>