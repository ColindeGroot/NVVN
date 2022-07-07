<x-sdg>
    <link rel="stylesheet" href="{{url('css/verantwoordeconsumptie.css')}}" type="text/css"> 
        
    <div class="sdg-content wrapper">
        <div class="sdg-content-wrapper">
            <div class="sdg-textbox">
                <div class="sdg-title" ><span>12.</span> Verantwoorde consumptie en productie</div>
                <div class="sub-title">Hoe gaan we efficiënter gebruikmaken van grondstoffen, meer hergebruiken en afval verminderen?</div>
                <div class="text" >
                Bedrijven, overheid en consumenten worden aangespoord om bewuste keuzes te maken om de druk op het milieu te verlagen en de minder afhankelijk te zijn van grondstoffen. Zo beperken we de negatieve gevolgen van ons consumptie voor volgende generaties.
                </div>
            </div>
                
            <div class="sdg-imagebox">
                <img class="sdg" src="{{url('images/sdg12.svg')}}">
            </div>
        </div>
    </div>
    <div class="sdg-buttons wrapper">
        <button class="terug-button button" onclick="history.back()"><i class="fa-solid fa-circle-left"></i> Terug</button>
        <a href="#"><div class="start-button button" >Start challenge</div></a>
    </div>
</x-sdg>

<script type="text/javascript">  
    /* var video  = document.getElementById("video"); */

    // function om de overgang te hiden
    /* function hideVideo() {
    video.style.display= "none";
    } */

    // wanneer pagina opent, speel overgang af, verberg achtergrond en scroll tijdelijk
    window.onload = () => /* setTimeout(hideVideo, 3200), */ setTimeout(hide, 3000), setTimeout(hideScroll, 5000);
</script>
