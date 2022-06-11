@extends('layouts.standaard')
@include('nav')

<div id="intro-box" class="intro-box wrapper">
    <div class="title" >Sustainable Design game</div>
    <div class="tekst" >De SDG-game is een online spel over de 17 duurzame ontwikkelingsdoelen. Dit online spel daagt studenten uit zich te verdiepen in de SDG’s en om challenges uit te voeren zodat zij kennis maken met alle SDG’s volgens de Nederlandse maatstaven.</div>
    <div class="button" id="toggle" >Start game</div>
</div>

<div id="swiper-box" class="swiper-box wrapper">

   <div class="swiper-container">

        <div class="title" >Kies je SDG en begin het avontuur!</div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a class="sdg1" href="<?php echo route('gendergelijkheid'); ?>"><img src="{{url('images/sdg1.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg2" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg2.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg3" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg3.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg4" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg4.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg5" href="<?php echo route('gendergelijkheid'); ?>"><img src="{{url('images/sdg5.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg6" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg6.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg7" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg7.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg8" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg8.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg9" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg9.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg10" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg10.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg11" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg11.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg12" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg12.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg13" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg13.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg14" href="<?php echo route('gendergelijkheid'); ?>"><img src="{{url('images/sdg14.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg15" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg15.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg16" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg16.svg')}}"></a></div>
                <div class="swiper-slide"><a class="sdg17" href="<?php echo route('home'); ?>"><img src="{{url('images/sdg17.svg')}}"></a></div>
            </div>
        </div>

        <div class="desktop-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
   </div>
    <div class="mobile-buttons">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>  
</div>