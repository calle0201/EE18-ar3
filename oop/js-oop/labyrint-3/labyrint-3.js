// Element vi använder
const canvas = document.querySelector("canvas");

// Ställ in storlek på canvas
canvas.width = 800;
canvas.height = 600;

// Slå på rit-api
var ctx = canvas.getContext("2d");

/*****************************************/
/*          Globala variabler            */
/*****************************************/
// Skapa labyrinten
var karta = [
    [0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1], // rad 0
    [1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1], // rad 1
    [1, 1, 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1], // rad 2
    [1, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 1], // rad 3
    [1, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1, 1], // ...
    [1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 0, 0, 1],
    [1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 0, 1, 1, 1, 0, 1],
    [1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 0, 0, 0, 1],
    [1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 1, 1, 1],
    [1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 0, 1, 0, 1],
    [1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
];

/*****************************************/
/*                Objekten               */
/*****************************************/

// Spelaren
var spelare = {
    rad: 0,
    kolumn: 0,
    rotation: 0,
    bild: new Image(),
    rita() {
        ctx.save();
        ctx.translate(this.kolumn * 50 + 25, this.rad * 50 + 25);
        ctx.rotate(this.rotation / 180 * Math.PI);
        ctx.drawImage(this.bild, -25, -25, 50, 50);
        ctx.restore();
    }
}
spelare.bild.src = "../bilder/nyckelpiga.png";

// Var finns spelaren
// spelare.rad -> på vilken rad
// spelare.kolumn -> på viljen kolumn
// spelare.rita()

// Mynt 1
var mynt1 = {
    rad: 1,
    kolumn: 1,
    bild: new Image(),
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}
mynt1.bild.src = "../bilder/coin.png";

// Mynt 2
var mynt2 = {
    rad: 5,
    kolumn: 5,
    bild: new Image(),
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}
mynt2.bild.src = "../bilder/coin.png";

// Mynt 3
var mynt3 = {
    rad: 7,
    kolumn: 2,
    bild: new Image(),
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}
mynt3.bild.src = "../bilder/coin.png";

// Monster
var monster1 = {
    rad: 10,
    kolumn: 10,
    bild: new Image(),
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}
monster1.bild.src = "../bilder/monster.png";
var monster2 = {
    rad: 1,
    kolumn: 10,
    bild: new Image(),
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}
monster2.bild.src = "../bilder/monster.png";

/*****************************************/
/*              Funktioner               */
/*****************************************/
// Rita kartan
function ritaKartan() {
    // Loopa igenom raderna
    for (var rad = 0; rad < 12; rad++) {

        // Loopa igenom kolumnerna
        for (var kolumn = 0; kolumn < 16; kolumn++) {

            // Om "1" rita ut en kloss (vägg)
            if (karta[rad][kolumn] == 1) {
                ctx.fillRect(kolumn * 50, rad * 50, 50, 50);
            }
        }
    }
}

// Animationsloopen
function loopen() {
    // Sudda ut canvas
    ctx.clearRect(0, 0, 800, 600);

    ritaKartan();

    spelare.rita();

    mynt1.rita();
    mynt2.rita();
    mynt3.rita();

    monster1.rita();
    monster2.rita();

    requestAnimationFrame(loopen);
}

// Starta loopen
loopen()

// Lyssna på piltangenter
window.addEventListener("keypress", function (e) {
    switch (e.code) {
        case "Numpad2": // Pil nedåt
            figur.y += 50;
            figur.rotation = 180;
            break;
        case "Numpad8": // Pil uppåt
            figur.y -= 50;
            figur.rotation = 0;
            break;
        case "Numpad4": // Pil vänster
            figur.x -= 50;
            figur.rotation = 270;
            break;
        case "Numpad6": // Pil höger
            figur.x += 50;
            figur.rotation = 90;
            break;

        default:
            break;
    }
    console.log("Kolumn: " + (figur.x - 25) / 50 + ", rad: " + (figur.y - 25) / 50);
})