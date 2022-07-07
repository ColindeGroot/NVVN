<x-sdg>
    <link rel="stylesheet" href="{{url('css/geenarmoede.css')}}" type="text/css"> 
    
        <div class="sdg-content wrapper">
            <div class="sdg-content-wrapper">
                <div class="sdg-textbox">
                    <div class="sdg-title" ><span>1.</span> Geen armoede</div>
                    <div class="sub-title">Uitbannen van alle vormen van (extreme) armoede</div>
                    <div class="text" >
                        Einde aan de armoede gaat over het verminderen van alle vormen van armoede. De SDG-agenda vraagt speciale aandacht voor sociale bescherming, gelijke economische rechten en weerbaarheid van arme en kwetsbare groepen. Omdat armoede in Nederland er anders uit ziet dan armoede in de armste landen van de wereld is dit voor Nederland aangepast. Nederland richt zich op het voorkomen en tegengaan van armoede en problematische schulden, met speciale aandacht voor kinderen die in armoede leven.
                    </div>
                </div>
                    
                <div class="sdg-imagebox">
                    <img class="sdg" src="{{url('images/sdg1.svg')}}">
                </div>
            </div>
        </div>
        <div class="sdg-buttons wrapper">
            <button class="terug-button button" onclick="history.back()"><i class="fa-solid fa-circle-left"></i> Terug</button>
            <a href="<?php echo route('geenarmoede-opdracht'); ?>"><div class="start-button button" >Start challenge</div></a>
        </div>
</x-sdg>
