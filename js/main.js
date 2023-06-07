const menuMostrar = document.querySelector(".nav__mobile");
const menuAbierto = document.querySelector(".bars__menu");
function toggleMenu() {
    menuMostrar.classList.toggle("activate__menu_js");
};
menuAbierto.addEventListener("click", toggleMenu);


/*Home menu icon*/
document.querySelector(".bars__menu--background").addEventListener("click", animateBars);
const line1__bars = document.querySelector(".line1__bars-menu");
const line2__bars = document.querySelector(".line2__bars-menu");
const line3__bars = document.querySelector(".line3__bars-menu");

function animateBars() {
    line1__bars.classList.toggle("activeline1__bars-menu");
    line2__bars.classList.toggle("activeline2__bars-menu");
    line3__bars.classList.toggle("activeline3__bars-menu");
}



/*Home menu icon*/
/*Acordion*/
const acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

/*Ciudades*/
