<div class="nav">
    <a href="<?php echo route('home'); ?>"><img class="nav_logo1" src="{{url('images/NVVN2.png')}}"></a>
    <div class="nav_half">
        <a href="#"><div>OVER NVVN</div></a>
        <a href="<?php echo route('home'); ?>"><img class="nav_logo2" src="{{url('images/sdg.svg')}}"></a>
    </div>
</div>

<script type="text/javascript">  
    /* var video  = document.getElementById("video"); */

    // function om de overgang te hiden
    /* function hideVideo() {
    video.style.display= "none";
    } */

    // wanneer pagina opent, speel overgang af, verberg achtergrond en scroll tijdelijk
    window.onload = () => /* setTimeout(hideVideo, 3200), */ setTimeout(hide, 3000), setTimeout(hideScroll, 5000);
</script>