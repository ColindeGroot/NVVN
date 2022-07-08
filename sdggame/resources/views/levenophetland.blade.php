<x-sdg>
    <link rel="stylesheet" href="{{url('css/levenophetland.css')}}" type="text/css"> 

    <video id="video" autoplay muted src="{{url('videos/levenophetland.mp4')}}"></video>
        
    <div class="sdg-content wrapper">
        <div class="sdg-content-wrapper">
            <div class="sdg-textbox">
                <div class="sdg-title" ><span>15.</span> Leven op het land</div>
                <div class="sub-title">Beschermen van ecosystemen, bossen en biodiversiteit</div>
                <div class="text" >
                Bescherming en herstel van ecosystemen en biodiversiteit versterken de weerbaarheid tegen toenemende bevolkingsdruk, intensivering van landgebruik en klimaatverandering. Gezonde ecosystemen zijn erg belangrijk zoals de beschikbaarheid van schoon water en schone lucht, de aanwezigheid van insecten voor bestuiving en de mogelijkheden voor ontspanning, recreatie en educatie.
                </div>
            </div>
                
            <div class="sdg-imagebox">
                <img class="sdg" src="{{url('images/sdg15.svg')}}">
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
