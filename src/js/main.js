var slides = document.querySelectorAll("#slides .slide");
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,4000);
var next = document.getElementById("next");
var previous = document.getElementById("previous");
var controls = document.querySelectorAll(".controls");

assignInlineBlockDisplay();
createImage();
countImages();
countForms();

function start(){
    //niebieski();
    //document.getElementById("n").addEventListener("click", niebieski, false);
    //document.getElementById("c").addEventListener("click", czerwony, false);
    //document.getElementById("z").addEventListener("click", zielony, false);
}
window.addEventListener("load", start, false);

function niebieski(){
    document.body.setAttribute("style", "background: linear-gradient(white,blue)");
}

function czerwony(){
    document.body.setAttribute("style", "background: linear-gradient(white,red)");
}

function zielony(){
    document.body.setAttribute("style", "background: linear-gradient(white,green)");
}


function assignInlineBlockDisplay() {
    for(var i=0; i<controls.length; i++){
        controls[i].style.display = "inline-block";
    }
}

next.onclick = function(){
    nextSlide();
};

previous.onclick = function(){
    previousSlide();
};

function nextSlide(){
    goToSlide(currentSlide+1);
}

function previousSlide(){
    goToSlide(currentSlide-1);
}

function goToSlide(n){
    slides[currentSlide].className = "slide";
    currentSlide = (n+slides.length)%slides.length;
    slides[currentSlide].className = "slide showing";
}

var playing = true;
var pauseButton = document.getElementById("pause");

function pauseSlideshow() {
    pauseButton.innerHTML = "Play";
    playing = false;
    clearInterval(slideInterval);
}

function playSlideshow() {
    pauseButton.innerHTML = "Pause";
    playing = true;
    slideInterval = setInterval(nextSlide,4000);
}

pauseButton.onclick = function() {
    if(playing) {
        pauseSlideshow();
    } else {
        playSlideshow();
    }
};

function createImage() {
    var image = document.createElement("IMG");
    image.setAttribute("src", "img/dynamic.jpg");
    image.setAttribute("width", "700");
    image.setAttribute("width", "470");
    image.setAttribute("alt", "Rower");
    document.getElementById("dynamicImageContainer").appendChild(image);

}

function countImages() {
    var imagesNumber = document.images.length;
    console.log("Images number : " + imagesNumber);
}

function countForms() {
    var x = document.forms.length;
    console.log("Forms number : " + x);
}
