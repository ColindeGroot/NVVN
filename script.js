
var anim1  = bodymovin.loadAnimation({
    wrapper: document.getElementById('anim1'),
    renderer: 'svg',
    loop: false,
    autoplay: false,
    path: 'https://assets1.lottiefiles.com/private_files/lf30_gdpswqzd.json'
}); 

var loading  = bodymovin.loadAnimation({
    wrapper: document.getElementById('loading'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://assets8.lottiefiles.com/packages/lf20_dkz94xcg.json'
});

function hide() {
    var overlay = document.getElementById("overlay");
    var loading = document.getElementById("loading");
    overlay.classList.add("overlay-hide");
    loading.classList.add("loading-hide");
}

function hideScroll() {
    var element = document.querySelector('body');
    element.classList.remove("water");
}

window.onload = () => anim1.play(), setTimeout(hide, 3000), setTimeout(hideScroll, 6000);