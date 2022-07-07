<x-sdg>
<link rel="stylesheet" href="{{url('css/kwaliteitsonderwijs.css')}}" type="text/css"> 
    
        <div class="sdg-content wrapper">
            <div class="sdg-content-wrapper">
                <div class="sdg-textbox">
                    <div class="sdg-title" ><span>4.</span> Kwaliteitsonderwijs</div>
                    <div class="sub-title">Inclusief, gelijkwaardig en kwalitatief onderwijs voor iedereen</div>
                    <div class="text" >
                        Kwaliteitsonderwijs gaat over dat iedereen toegang heeft tot goed onderwijs. Passende en scholing is voor alle leeftijdsgroepen en in alle levensfasen van belang, van kleuter- en basisonderwijs tot beroeps- en hoger onderwijs, en daarna via ‘leven lang ontwikkelen’. Vaardigheden van leerlingen worden voor een groot deel bepaald door de kwaliteit van het aangeboden onderwijs. Bovendien zorgt onderwijs ervoor dat de bevolking nu en in de toekomst over de goede vaardigheden beschikt om te functioneren in een kennismaatschappij en goed kunnen meedraaien in de maatschappij.
                    </div>
                </div>
                    
                <div class="sdg-imagebox">
                    <img class="sdg" src="{{url('images/sdg4.svg')}}">
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