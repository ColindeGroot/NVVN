
var anim1  = bodymovin.loadAnimation({
    wrapper: document.getElementById('anim1'),
    renderer: 'svg',
    loop: false,
    autoplay: false,
    path: 'https://assets1.lottiefiles.com/private_files/lf30_gdpswqzd.json'
});

function addFlashyDesign() {
    var element = document.getElementById("overlay");
    element.classList.add("overlay-hide");
}

window.onload = () => anim1.play(), setTimeout(addFlashyDesign, 3000);