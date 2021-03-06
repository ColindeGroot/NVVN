<x-sdg>
    <link rel="stylesheet" href="{{url('css/schoonwater.css')}}" type="text/css"> 

    <video id="video" autoplay muted src="{{url('videos/schoonwater.mp4')}}"></video>
        
            <div class="sdg-content wrapper">
                <div class="sdg-content-wrapper">
                    <div class="sdg-textbox">
                        <div class="sdg-title" ><span>6.</span> Schoon water en sanitair</div>
                        <div class="sub-title">Schoon water en sanitaire voorzieningen voor iedereen
                        </div>
                        <div class="text" >
                            De toegang tot drinkwater en sanitair en duurzaam beheer van water vormen de kern van SDG 6. Vrijwel iedereen in Nederland heeft toegang tot schoon drinkwater en goed sanitair. Drinkwater moet betaalbaar blijven voor ons allemaal. De vraag naar drinkwater is tijdens de afgelopen droge en hete zomers gestegen. Ook de groeiende bevolking en de behoefte aan meer woningen, en daarmee meer aansluitingen, zorgen voor meer vraag. Omdat er weinig mogelijkheden zijn om meer water te winnen, concurreren drinkwaterbedrijven steeds vaker met de belangen van natuur, landbouw en klimaatactie. Als er vaker droge zomers vaker voorkomen, kan de leveringszekerheid van drinkwater op termijn onder druk komen.
                        </div>
                    </div>
                        
                    <div class="sdg-imagebox">
                        <img class="sdg" src="{{url('images/sdg6.svg')}}">
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
        window.onload = () => setTimeout(SlideIn), setTimeout(hideVideo, 5000), setTimeout(RemoveSlideIn, 4500), setTimeout(SlideOut, 4500), setTimeout(hide, 4500), setTimeout(hideScroll, 5000);
    </script>