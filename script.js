let boxprojet = document.querySelectorAll(".calque");
let h3 = document.querySelectorAll("h3");
let h4 = document.querySelectorAll("h4");
let trait2 = document.querySelectorAll(".trait2");
let header = document.querySelector("header");

console.log(boxprojet);

for (let i = 0; i < boxprojet.length; i++) {
    boxprojet[i].addEventListener("mouseover", function() {
        h3[i].style.display = "none";
        h4[i].style.display = "none";
        boxprojet[i].style.background = "none";
        trait2[i].style.display = "none";
        boxprojet[i].addEventListener("mouseleave", function() {
            boxprojet[i].style.background = "white";
            h3[i].style.display = "block";
            h4[i].style.display = "block";
            trait2[i].style.display = "block";
        });
    })
}

$(document).ready(function() {
    $('.menu').on('click', function() { // Au clic sur un élément
        let page = $(this).attr('href'); // Page cible
        let speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate({ scrollTop: $(page).offset().top }, speed); // Go
        return false;
    });
});