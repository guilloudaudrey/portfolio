let boxprojet = document.querySelectorAll(".calque");
let h3 = document.querySelectorAll(".h3calque");
let h4 = document.querySelectorAll(".h4calque");
let trait2 = document.querySelectorAll(".trait2calque");
let header = document.querySelector("header");
let description = document.querySelectorAll(".descriptioncalque");

console.log(boxprojet);

for (let i = 0; i < boxprojet.length; i++) {
    boxprojet[i].addEventListener("mouseover", function() {
        boxprojet[i].style.background = "none";
        h3[i].style.display = "none";
        h4[i].style.display = "none";
        trait2[i].style.display = "none";
        description[i].style.display = "none";


        boxprojet[i].addEventListener("mouseleave", function() {
            boxprojet[i].style.background = "white";
            h3[i].style.display = "block";
            h4[i].style.display = "block";
            trait2[i].style.display = "block";
            description[i].style.display = "block";
        });
    })
}

$(function() {
    $('.lien').on('click', function() { // Au clic sur un élément
        let page = $(this).attr('href'); // Page cible
        let speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate({ scrollTop: $(page).offset().top }, speed); // Go
        return false;
    });
});

$(function() {
    let shrinkHeader = 583;
    let shrinkHeader2 = 2000;
    $(window).scroll(function() {
        let scroll = getCurrentScroll();
        if (window.innerWidth > 870) {
            if (scroll >= shrinkHeader) {
                $('header').addClass('nomlogo1');
                $('.nomlogo').hide();
                $('.trait').hide();
                $('.navlogo').hide();
                $('.menu').addClass('menushrink');
            } else {
                $('header').removeClass('nomlogo1');
                $('.menu').removeClass('menushrink');
                $('.nomlogo').show();
                $('.trait').show();
                $('.navlogo').show();
                $('nav').show();
            }
        }
    });

    function getCurrentScroll() {
        return window.pageYOffset;
    }
});

$(document).ready(function() {

    $(".cross").hide();
    $(".menu2").hide();
    $(".hamburger").click(function() {
        $(".menu2").slideToggle("slow", function() {
            $(".hamburger").hide();
            $(".cross").show();
        });
    });

    $(".cross").click(function() {
        $(".menu2").slideToggle("slow", function() {
            $(".cross").hide();
            $(".hamburger").show();
        });
    });

    $(".ul2").click(function() {
        $(".menu2").slideToggle("slow", function() {
            $(".cross").hide();
            $(".hamburger").show();
        });
    });

});