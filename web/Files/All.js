var opts = { step: 100, trigger: 100 };
$.autoscroll.init(opts);
window.onload = function () {
    if (sessionStorage.length === 0) alert("Przez wcisnięcie lewego Ctrl możesz szybko skrolować stronę. Żeby zobaczyć efekt, najedź myszką na róg przęglądarki i wciśnij Ctrl.");
    sessionStorage.setItem("Napis", "Tak");
}