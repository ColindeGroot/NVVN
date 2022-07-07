<x-sdg>
    <link rel="stylesheet" href="{{url('css/partnerschap.css')}}" type="text/css"> 

    <video id="video" autoplay muted src="{{url('videos/partnerschap.mp4')}}"></video>
        
    <div class="sdg-content wrapper">
        <div class="sdg-content-wrapper">
            <div class="sdg-textbox">
                <div class="sdg-title" ><span>17.</span> Partnerschap om doelstelling te bereiken</div>
                <div class="sub-title">Versterken van het mondiaal partnerschap om doelen te bereiken</div>
                <div class="text" >
                Dit vraagt om samenhangend beleid, een meewerkende omgeving en de bereidheid tot aangaan van nieuwe partnerschappen. Met wie werk je samen en waarom? Het gaat er bij dit doel om welk effect ontwikkelingen in Nederland op andere landen hebben.
                </div>
            </div>
                
            <div class="sdg-imagebox">
                <img class="sdg" src="{{url('images/sdg17.svg')}}">
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
window.onload = () => setTimeout(hideVideo, 3200), setTimeout(hide, 3000), setTimeout(hideScroll, 5000);
</script>   