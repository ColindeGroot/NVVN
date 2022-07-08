<x-sdg>
    <link rel="stylesheet" href="{{url('css/industrie.css')}}" type="text/css"> 

    <video id="video" autoplay muted src="{{url('videos/industrie.mp4')}}"></video>
    
        <div class="sdg-content wrapper">
            <div class="sdg-content-wrapper">
                <div class="sdg-textbox">
                    <div class="sdg-title" ><span>9.</span> Industrie, innovatie en infrastructuur</div>
                    <div class="sub-title">Infrastructuur voor duurzame industrialisatie</div>
                    <div class="text" >
                        Infrastructuur en mobiliteit, industrie en duurzame bedrijvigheid, en kennis en innovatie zijn belangrijk in een duurzame wereld. Een toegankelijke infrastructuur en mobiliteit voor iedereen. Mobiliteit en infrastructuur helpen mensen om van plek a naar plek b te komen, bijvoorbeeld naar het werk, contacten te onderhouden en vrije tijd in te vullen met sport, muziek of theater. Als mensen lang in de file staan dan is dat nadelig voor het milieu en wanneer mensen te hard rijden dan gaat het niet goed met de verkeersveiligheid en het milieu.
                    </div>
                </div>
                    
                <div class="sdg-imagebox">
                    <img class="sdg" src="{{url('images/sdg9.svg')}}">
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