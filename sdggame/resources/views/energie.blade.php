<x-sdg>
    <link rel="stylesheet" href="{{url('css/energie.css')}}" type="text/css"> 

    <video id="video" autoplay muted src="{{url('videos/energie.mp4')}}"></video>
    
        <div class="sdg-content wrapper">
            <div class="sdg-content-wrapper">
                <div class="sdg-textbox">
                    <div class="sdg-title" ><span>7.</span> Betaalbare en duurzame energie</div>
                    <div class="sub-title">Toegang tot betaalbare en duurzame energie voor iedereen</div>
                    <div class="text" >
                        Energiezekerheid, verduurzaming en energie-efficiëntie zijn erg belangrijk. Steeds minder mensen hebben de mogelijkheid om voldoende energie te gebruiken omdat het heel duur is geworden. In koude winters gebruiken veel mensen daarom extra dikke kleding en dekens om lekker warm te blijven en de kachel een beetje kouder te zetten.
                    </div>
                </div>
                    
                <div class="sdg-imagebox">
                    <img class="sdg" src="{{url('images/sdg7.svg')}}">
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
    window.onload = () => setTimeout(SlideIn), setTimeout(hideVideo, 6000), setTimeout(RemoveSlideIn, 5500), setTimeout(SlideOut, 5500), setTimeout(hide, 5500), setTimeout(hideScroll, 6000);
</script>