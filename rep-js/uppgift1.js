const rutaLösen = document.querySelector(".lösen");
const knapp = document.querySelector("button");
const rutaSvar = document.querySelector(".svar");

// När användaren klickar på knappen
knapp.addEventListener("click", function () {
    
    // Läs in användarens gissning
    var lösen = rutaLösen.nodeValue;

    // Är lösen rätt?
    if (lösen == "9") {
        rutaSvar.value = "070098098";
    } else {
        rutaSvar.value = "Fel!s"
    }
})