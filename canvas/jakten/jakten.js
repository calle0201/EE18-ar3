// Element vi jobbar med
const canvas = document.querySelector("canvas");
const ePoints = document.querySelector("p");

// Ställ in bredd och höjd
canvas.width = 800;
canvas.height = 600;

// Slå på ritmotorn
var ctx = canvas.getContext("2d");

// Ladda in bilderna
var centaur = new Image();
centaur.src = "./bilder/centaur.png";
var spider = new Image();
spider.src = "./bilder/spider.png";

// Figurernas position
var centaurX = 100, centaurY = 100;
var spiderX = 700 * Math.random();  // Slump 0 -700
var spiderY = 500 * Math.random();  // Slump 0 - 500
var squareX = 700 * Math.random();
var squareY = 700 * Math.random();

// Animationsloopen
var points = 0;
function loopen() {
    // Suddar ut canvas
    ctx.clearRect(0, 0, 800, 600);

    // Rita grafiken
    ctx.drawImage(centaur, centaurX, centaurY, 50, 50);
    ctx.drawImage(spider, spiderX, spiderY, 50, 50);
    ctx.fillRect(squareX, squareY, 100, 100);

    // Kollision
    var d = Math.sqrt((centaurY - spiderY)**2 + (centaurX - spiderX)**2);
    // När figuren träffar varandra spawna om Spider
    if (d < 50) {
        spiderX = 700 * Math.random();
        spiderY = 500 * Math.random();
        points++;
        ePoints.textContent = points;
    }

    requestAnimationFrame(loopen);
}
loopen();

// Lyssna på tangenter
window.addEventListener("keydown", function (e) {
    //console.log(e.keyCode);

    // Beroende vilken vi trycker på ...
    switch (e.keyCode) {
        // Flytta på Centaur
        case 98: // Numpad2
            // Om mindre än 600
            if (centaurY < 550) {
                centaurY += 10;
            }
            break;

        case 100: // Numpad4
            // Om större än 0
            if (centaurX > 0) {
                centaurX -= 10;
            }
            break;

        case 102: // Numpad6
            // Om mindre än 800
            if (centaurX < 750) {
                centaurX += 10;
            }
            break;

        case 104:  // Numpad8
            // Om större än 0
            if (centaurY > 0) {
                centaurY -= 10;
            }
            break;
    }
})

/* canvas.addEventListener("mousemove", function (e) {
    spiderX = e.offsetX;
    spiderY = e.offsetY;
}) */