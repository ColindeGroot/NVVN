<x-sdg>
    <link rel="stylesheet" href="{{url('css/ongelijkheidverminderen.css')}}" type="text/css"> 

    <video id="video" autoplay muted src="{{url('videos/ongelijkheidverminderen.mp4')}}"></video>
    
        <div class="sdg-content wrapper">
            <div class="sdg-content-wrapper">
                <div class="sdg-textbox">
                    <div class="sdg-title" ><span>10.</span> Ongelijkheid verminderen</div>
                    <div class="sub-title">Meer sociale en economische gelijkheid versterkt de sociale situatie binnen een land, en verbetert daarmee de kansen voor en inclusie van iedereen.</div>
                    <div class="text" >
                        Sociale samenhang is onmisbaar voor het goed functioneren van een samenleving. De sociale infrastructuur – familie, buren, vrienden, verenigingen en hulp en ondersteuning – vormt hiervan de basis. Mensen moeten mee kunnen doen, zodat ze zich deel van een groep kunnen voelen. Dat geld ook voor mensen uit andere landen die hier komen werken.
                    </div>
                </div>
                    
                <div class="sdg-imagebox">
                    <img class="sdg" src="{{url('images/sdg10.svg')}}">
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
        ideo.classList.add("slide-out");
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
    window.onload = () => setTimeout(SlideIn), setTimeout(hideVideo, 5000), setTimeout(RemoveSlideIn, 4500), setTimeout(SlideOut, 4500), setTimeout(hide, 4500), setTimeout(hideScroll, 5000);
</script>