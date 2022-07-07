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

    // wanneer pagina opent, speel overgang af, verberg achtergrond en scroll tijdelijk
window.onload = () => setTimeout(hideVideo, 5000), setTimeout(hide, 3000), setTimeout(hideScroll, 5000);
</script>  
