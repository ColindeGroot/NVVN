<x-sdg>
    <link rel="stylesheet" href="{{url('css/eerlijkwerk.css')}}" type="text/css"> 

    <video id="video" autoplay muted src="{{url('videos/eerlijkwerk.mp4')}}"></video>
    
        <div class="sdg-content wrapper">
            <div class="sdg-content-wrapper">
                <div class="sdg-textbox">
                    <div class="sdg-title" ><span>8.</span> Eerlijk werk en economische groei</div>
                    <div class="sub-title">Inclusieve, economische groei, werkgelegenheid en fatsoenlijk werk voor iedereen</div>
                    <div class="text" >
                        Economische groei, met aandacht voor innovatie, ondernemerschap en milieu is erg belangrijk voor een duurzame wereld. Economische activiteiten kunnen op lange termijn schadelijk zijn voor de brede welvaart, de leefomgeving en het welbevinden van de mensen en dieren. Voor de productie van goederen en diensten is input nodig van kapitaal, arbeid en grondstoffen. Worden deze duurzaam en productief ingezet? En hoe worden de winsten en inkomens verdeeld worden over burgers en bedrijven?
                    </div>
                </div>
                    
                <div class="sdg-imagebox">
                    <img class="sdg" src="{{url('images/sdg8.svg')}}">
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
    window.onload = () => setTimeout(SlideIn), setTimeout(hideVideo, 5500), setTimeout(RemoveSlideIn, 4500), setTimeout(SlideOut, 4500), setTimeout(hide, 4500), setTimeout(hideScroll, 5000);
</script>