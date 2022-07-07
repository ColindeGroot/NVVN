<x-sdg>
    <link rel="stylesheet" href="{{url('css/eerlijkwerk.css')}}" type="text/css"> 
    
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
    /* var video  = document.getElementById("video"); */

    // function om de overgang te hiden
    /* function hideVideo() {
    video.style.display= "none";
    } */

    // wanneer pagina opent, speel overgang af, verberg achtergrond en scroll tijdelijk
    window.onload = () => /* setTimeout(hideVideo, 3200), */ setTimeout(hide, 3000), setTimeout(hideScroll, 5000);
</script>