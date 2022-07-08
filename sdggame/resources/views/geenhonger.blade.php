<x-sdg>
    <link rel="stylesheet" href="{{url('css/geenhonger.css')}}" type="text/css"> 

    <video id="video" autoplay muted src="{{url('videos/geenhonger.mp4')}}"></video>
        
    <div class="sdg-content wrapper">
        <div class="sdg-content-wrapper">
            <div class="sdg-textbox">
                <div class="sdg-title" ><span>2.</span> Geen honger</div>
                <div class="sub-title">Einde aan honger, zorgen voor voedselzekerheid en duurzame landbouw</div>
                <div class="text" >
                    Einde aan de honger gaat over het doel honger te beëindigen, voedselzekerheid te garanderen en betere voeding en duurzame landbouw te stimuleren. Omdat in Nederland ondervoeding en voedselonzekerheid niet vaak voorkomen, kijken we ook wel naar obesitas, overvoeding en hoe wij voedsel produceren: hoe duurzaam doen we dat? En welk impact heeft dat op de leefomgeving. Ook voedselverspilling tegengaan hoort hierbij.
                </div>
            </div>
                
            <div class="sdg-imagebox">
                <img class="sdg" src="{{url('images/sdg2.svg')}}">
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
    window.onload = () => setTimeout(SlideIn), setTimeout(hideVideo, 4500), setTimeout(RemoveSlideIn, 4000), setTimeout(SlideOut, 4000), setTimeout(hide, 4000), setTimeout(hideScroll, 5000);
</script>