const Tan = ["Dog", "Raccoon", "Cat", "Bear"];
const Oni = ["Red", "Green", "Black", "Blue"];

function save() {
    var Smok = document.querySelector('input[name="Smok"]:checked').value;
    sessionStorage.setItem('input[name="Smok"]:checked', Smok);
	
    var Shintai = document.getElementById("Shintai").value;
    sessionStorage.setItem("Shintai", Shintai);
	
    for (let i = 0; i < Tan.length; i++) {
        var Tanuki = document.getElementById(Tan[i]).checked ? document.getElementById(Tan[i]).value : '';
        sessionStorage.setItem(Tan[i], Tanuki);
    }
	
    var Amaterasu = document.getElementById("Amaterasu").value;
    sessionStorage.setItem("Amaterasu", Amaterasu);
	
    for (let i = 0; i < Oni.length; i++) {
        var Kolor = document.getElementById(Oni[i]).checked ? document.getElementById(Oni[i]).value : '';
        sessionStorage.setItem(Oni[i], Kolor);
    }
	
    var Happy = document.getElementById("Happy").value;
    sessionStorage.setItem("Happy", Happy);
	
    var Kitsune = document.querySelector('input[name="Kitsune"]:checked').value;
    sessionStorage.setItem('input[name="Kitsune"]:checked', Kitsune);
	
    var Genji = document.getElementById("Genji").value;
    sessionStorage.setItem("Genji", Genji);
}
window.onload = function () {
	var opts = { step: 100, trigger: 100 };
	$.autoscroll.init(opts);
	
    if (sessionStorage.length === 0) alert("Przez wcisnięcie lewego Ctrl możesz szybko skrolować stronę. Żeby zobaczyć efekt, najedź myszką na róg przęglądarki i wciśnij Ctrl.");
    sessionStorage.setItem("Napis", "Tak");
	
    var delet = document.getElementById("delet1");
    delet.remove();
	
    delet = document.getElementById("delet2");
    delet.remove();
	
	document.getElementById("odp_h").classList.toggle("view_odp");
	
    var Shintai = sessionStorage.getItem("Shintai");
    document.getElementById("Shintai").value = Shintai;
	
    var Smok = sessionStorage.getItem('input[name="Smok"]:checked');
	if (Smok != null) document.getElementById(Smok).checked = true;
	
    for (let i = 0; i < Tan.length; i++) {
        var Tanuki = sessionStorage.getItem(Tan[i]);
        if (Tanuki != '' && Tanuki != null) document.getElementById(Tanuki).checked = true;
    }
	
    var Amaterasu = sessionStorage.getItem("Amaterasu");
    document.getElementById("Amaterasu").value = Amaterasu;
	
    for (let i = 0; i < Oni.length; i++) {
        var Kolor = sessionStorage.getItem(Oni[i]);
        if (Kolor != '' && Kolor != null) document.getElementById(Kolor).checked = true;
    }
	
    var Happy = sessionStorage.getItem("Happy");
    document.getElementById("Happy").value = Happy;
	
    var Kitsune = sessionStorage.getItem('input[name="Kitsune"]:checked');
    if (Kitsune != null) document.getElementById(Kitsune).checked = true;
	
    var Genji = sessionStorage.getItem("Genji");
    document.getElementById("Genji").value = Genji;
};
function erase() {
    sessionStorage.clear();
}
function ile_pkt() {
	
	
    var pkt = 0;
	
    var Shintai = sessionStorage.getItem("Shintai");
    if (Shintai == "Shintai" || Shintai == "shintai") pkt = pkt + 3;
	
    var Smok = sessionStorage.getItem('input[name="Smok"]:checked');
    if (Smok == "Tak") pkt = pkt + 1;
	
    var Amaterasu = sessionStorage.getItem("Amaterasu");
    if (Amaterasu == "3") pkt = pkt + 1;
	
    var Happy = sessionStorage.getItem("Happy");
    if (Happy == "5") pkt = pkt + 2;
	
    var Kitsune = sessionStorage.getItem('input[name="Kitsune"]:checked');
    if (Kitsune == "Lis") pkt = pkt + 1;
	
    var Genji = sessionStorage.getItem("Genji");
    if (Genji == "Genji" || Genji == "genji" || Genji == "Genji Monogatari" || Genji == "genji monogatari" || Genji == "Genji monogatari") pkt = pkt + 3;
    
	for (let i = 0; i < Tan.length; i++) {
        var Tanuki = sessionStorage.getItem(Tan[i]);
        if (Tanuki == "Raccoon") pkt = pkt + 2;
        else if (Tanuki == "Dog") pkt = pkt - 1;
        else if (Tanuki == "Bear") pkt = pkt - 1;
        else if (Tanuki == "Cat") pkt = pkt - 1;
    }
    
	for (let i = 0; i < Oni.length; i++) {
        var Kolor = sessionStorage.getItem(Oni[i]);
        if (Kolor == "Red" || Kolor == "Blue") pkt = pkt + 1;
        else if (Kolor == "Black") pkt = pkt - 1;
        else if (Kolor == "Green") pkt = pkt - 1;
    }
	
    sessionStorage.setItem("Punkty", pkt);
}
function pokaz_odp() {
    document.getElementById("odpowiedzi").classList.toggle('jest_odp');
    if (document.getElementById("pokaz").value != "ukryj odpowiedzi") document.getElementById("pokaz").value = "ukryj odpowiedzi";
    else document.getElementById("pokaz").value = "pokaż odpowiedzi";
}