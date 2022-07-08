<x-sdg>
    <link rel="stylesheet" href="{{url('css/duurzamesteden.css')}}" type="text/css"> 

    <video id="video" autoplay muted src="{{url('videos/duurzamesteden.mp4')}}"></video>
        
    <div class="sdg-content wrapper">
        <div class="sdg-content-wrapper">
            <div class="sdg-textbox">
                <div class="sdg-title" ><span>11.</span> Duurzame steden en gemeenschappen</div>
                <div class="sub-title">Maak steden veilig, veerkrachtig en duurzaam</div>
                <div class="text" >
                Er zijn weinig betaalbare woningen beschikbaar, hoe houden we de lokale leefomgeving veilig, betaalbaar, toegankelijk en duurzaam? Hoeveel ruimte is er per persoon beschikbaar en hoe gaat het met de  afvalverwerking en overheidsuitgaven voor het milieu. Een schone en veilige leefomgeving in het dorp, de wijk of de stad is daarbij erg belangrijk.
                </div>
            </div>
                
            <div class="sdg-imagebox">
                <img class="sdg" src="{{url('images/sdg11.svg')}}">
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
