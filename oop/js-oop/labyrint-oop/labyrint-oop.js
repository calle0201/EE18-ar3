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

// Spelare class (OOP) = mall för ett objekt
class Spelare {
    constructor() {
        this.rad = 0;
        this.kolumn = 0;
        this.rotation = 0;
        this.bild = new Image();
        this.bild.src = "../bilder/nyckelpiga.png";
    }
    rita() {
        ctx.save();
        ctx.translate(this.kolumn * 50 + 25, this.rad * 50 + 25);
        ctx.rotate(this.rotation / 180 * Math.PI);
        ctx.drawImage(this.bild, -25, -25, 50, 50);
        ctx.restore();
    }
}
// Nu skapar vi objektet
var spelare = new Spelare();

// Var finns spelaren
// spelare.rad -> på vilken rad
// spelare.kolumn -> på viljen kolumn
// spelare.rita()

// Klassen Mynt 
class Mynt {
    constructor() {
        this.rad = Math.floor(Math.random() * 12);
        this.kolumn = Math.floor(Math.random() * 16);
        this.bild = new Image();
        this.bild.src = "../bilder/coin.png";
    }
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}

// Skapa en array för mynt
var mynten = [];

// Fyll på med 5 mynt
for (let i = 0; i < 5; i++) {
    mynten.push(new Mynt());
}

// Klassen Monster
class Monster {
    constructor() {
        this.rad = Math.floor(Math.random() * 12);
        this.kolumn = Math.floor(Math.random() * 16);
        this.bild = new Image();
        this.bild.src = "../bilder/monster.png";
    }
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}

// En array för monsters
var monsters = [];
// Fyll på med 3 monster
for (let i = 0; i < 3; i++) {
    monsters.push(new Monster());
}

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

    // Rita ut alla mynt
    mynten.forEach(mynt => mynt.rita());

    // Rita ut alla monster
    monsters.forEach(monster => monster.rita());

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