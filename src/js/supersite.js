var odleglosc=90;

function start(){
	niebieski();
	document.getElementById("n").addEventListener("click", niebieski, false);
	document.getElementById("c").addEventListener("click", czerwony, false);
	document.getElementById("z").addEventListener("click", zielony, false);
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
