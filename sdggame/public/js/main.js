
// haalt animatie op
var anim1  = bodymovin.loadAnimation({
    wrapper: document.getElementById('anim1'),
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: 'https://assets5.lottiefiles.com/packages/lf20_isjkjty2.json'
}); 

//haalt laad animatie op
var loading  = bodymovin.loadAnimation({
    wrapper: document.getElementById('loading'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://assets8.lottiefiles.com/packages/lf20_dkz94xcg.json'
});

var anim1  = bodymovin.loadAnimation({
  wrapper: document.getElementById('globe'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'https://assets1.lottiefiles.com/packages/lf20_fxnuatmv.json'
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

// wanneer pagina opent, speel overgang af, verberg achtergrond en scroll tijdelijk
window.onload = () => anim1.play(), setTimeout(hide, 3000), setTimeout(hideScroll, 6000);

const introBox = document.getElementById("intro-box");
const swiperBox = document.getElementById("swiper-box");
const introButton = document.getElementById("toggle");
introButton.onclick = function () {
    
  if (introBox.style.display !== "none") {
    introBox.style.display = "none";
  } else {
    introBox.style.display = "block";
  }

  if (swiperBox.style.display !== "none") {
    swiperBox.style.display = "flex";
  } else {
    swiperBox.style.display = "block";
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