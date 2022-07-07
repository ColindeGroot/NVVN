<x-sdg>
    <link rel="stylesheet" href="{{url('css/energie.css')}}" type="text/css"> 
    
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
    /* var video  = document.getElementById("video"); */

    // function om de overgang te hiden
    /* function hideVideo() {
    video.style.display= "none";
    } */

    // wanneer pagina opent, speel overgang af, verberg achtergrond en scroll tijdelijk
    window.onload = () => /* setTimeout(hideVideo, 3200), */ setTimeout(hide, 3000), setTimeout(hideScroll, 5000);
</script>