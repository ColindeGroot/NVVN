<x-sdg>
    <link rel="stylesheet" href="{{url('css/goedegezondheid.css')}}" type="text/css"> 
    
        <div class="sdg-content wrapper">
            <div class="sdg-content-wrapper">
                <div class="sdg-textbox">
                    <div class="sdg-title" ><span>3.</span> Goede gezondheid en welzijn</div>
                    <div class="sub-title">Gezondheidszorg voor iedereen</div>
                    <div class="text" >
                        Goede gezondheid en welzijn gaat over dat iedereen de kans heeft in zo goed mogelijke gezondheid te leven, door behandeling van ziektes en psychische problemen en voorkomen dat mensen te vroeg sterven. Dit doel gaat ook over het tegengaan van verslaving ( alcohol, drugs, roken) en ook over het voorkomen van verkeersdoden.
                    </div>
                </div>
                    
                <div class="sdg-imagebox">
                    <img class="sdg" src="{{url('images/sdg3.svg')}}">
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