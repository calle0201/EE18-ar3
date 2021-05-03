// Element vi använder
const canvas = document.querySelector("canvas");

// Slå på ritmortorn
var ctx = canvas.getContext("2d");

// Ange mått på canvas
canvas.width = 800;
canvas.height = 600;

// Figurens egenskaper
var angry = {
    x: 300,
    y: 400,
    bild: new Image()
}
// Ladda in bilder
angry.bild.src = "./angry-bird-icon.png";

// Ett hinder
var hinder = {
    x: 800 * Math.random(),
    y: 600 * Math.random()
}

// Animationsloopen
function loopen() {
    // Sudda ut canvas
    ctx.clearRect(0, 0, 800, 600);

    // Rita ut figuren
    ctx.drawImage(angry.bild, angry.x, angry.y);

    // Rita ut hinder
    ctx.fillRect(hinder.x, hinder.y, 100, 100);

    requestAnimationFrame(loopen)
}
// Starta animationen
loopen();

// Lyssna på piltangenter
window.addEventListener("keydown", function (e) {

    // Vad händer för tangenterna
    switch (e.code) {
         case "Numpad8":
            if (angry.y > 0) {
                if (angry.y > hinder.y + 100) {
                    angry.y -= 5;
                }
            }
            break;
        case "Numpad2":
            if (angry.y < 535) {
                if (angry.y < hinder.y - 64) {
                    angry.y += 5;
                }
            }
            break;
        case "Numpad4":
            if (angry.x > 0) {
                if (angry.x > hinder.x + 100) {
                    angry.x -= 5;
                }
            }
            break;
        case "Numpad6":
            // Inte krocka med högerväggen
            if (angry.x < 735) {
                console.log("Till vänster om väggen");

                // Är angry i höjd med hindret?
                if (angry.y + 64 > hinder.y && angry.y < hinder.y + 100) {
                    console.log("I höjd med hindret");

                    // Är angry ifrån väggen?
                    if (angry.x < hinder.x - 64) {
                        angry.x += 5;
                    }
                } else {
                    angry.x += 5;
                }
            }
            break;
    }
    console.log(angry.x, angry.y, hinder.x, hinder.y);
})