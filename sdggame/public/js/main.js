// haalt aardbol animatie op
var globeAnim  = bodymovin.loadAnimation({
  wrapper: document.getElementById('globe'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'https://assets1.lottiefiles.com/packages/lf20_fxnuatmv.json'
}); 

//haalt laad animatie op
var loading  = bodymovin.loadAnimation({
    wrapper: document.getElementById('loading'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://assets2.lottiefiles.com/packages/lf20_eh5e7q65.json'
});

//verbergt de page wanneer de overgang bezig is
function hide() {
    var overlay = document.getElementById("overlay");
    var loading = document.getElementById("loading");
    overlay.classList.add("overlay-hide");
    loading.classList.add("loading-hide");
}

// verbergt scroll wanneer de overgang bezig is
function hideScroll() {
    var element = document.querySelector('body');
    element.classList.remove("hide-scroll");
}

const introBox = document.getElementById("intro-box");
const swiperBox = document.getElementById("swiper-box");
const introButton = document.getElementById("toggle");
const globe = document.getElementById("globe")
const introTitle = document.getElementById("intro-box-title")
const introText = document.getElementById("intro-box-text")

const myTimeout = setTimeout(1000);

introButton.onclick = function () {
    
  if (introBox.style.display !== "none") {
    introTitle.classList.add('fadeOut')
    introText.classList.add('fadeOut')
    introButton.classList.add('fadeOut')
    globe.classList.add('fadeInDownGlobe')
    setTimeout(function(){
      globeAnim.setSpeed(10);
    }, 500);
    setTimeout(function(){
      introBox.classList.add('fadeInDown')
    }, 1500);
    setTimeout(function(){
      introBox.style.display = "none";
    }, 2500);
  } else {
    introBox.style.display = "block";
  }

  if (swiperBox.style.display !== "none") {
    setTimeout(function(){
      swiperBox.style.display = "flex";
    }, 2500);
  } else {
    swiperBox.style.display = "flex";
  }
};

// swiper settings
const swiper = new Swiper(".swiper", {
    effect: "cards",
    grabCursor: true,
    spaceBetween: 100,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
});