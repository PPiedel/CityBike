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

var odleglosc=90;

function start(){
    niebieski();
    document.getElementById("n").addEventListener("click", niebieski, false);
    document.getElementById("c").addEventListener("click", czerwony, false);
    document.getElementById("z").addEventListener("click", zielony, false);
    document.getElementById("c1").addEventListener("click", czarny, false);
    document.getElementById("s1").addEventListener("click", szary, false);
    document.getElementById("ż1").addEventListener("click", żółty, false);
    document.getElementById("Zatwierdź").addEventListener("mousemove", ruszPrzycisk,false);
    document.getElementById("Zatwierdź").addEventListener("click", resetPrzycisk,false);
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

function czarny(){
    document.body.style.color='black';
}
function szary(){
    document.body.style.color='gray';
}
function żółty(){
    document.body.style.color='yellow';
}
function ruszPrzycisk(e){
    if(!e.ctrlKey)
    {
        document.getElementById("Zatwierdź").setAttribute("style","position:relative; left: "+odleglosc+"px");
        odleglosc=odleglosc+90;
    }
}
function resetPrzycisk(){
    document.getElementById("Zatwierdź").setAttribute("style","position:relative; left: 0px");
    odleglosc=90;
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
