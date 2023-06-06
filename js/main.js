/*Home menu icon*/
document.querySelector(".bars__menu").addEventListener("click", animateBars);
const line1__bars = document.querySelector(".line1__bars-menu");
const line2__bars = document.querySelector(".line2__bars-menu");
const line3__bars = document.querySelector(".line3__bars-menu");

function animateBars() {
    line1__bars.classList.toggle("activeline1__bars-menu");
    line2__bars.classList.toggle("activeline2__bars-menu");
    line3__bars.classList.toggle("activeline3__bars-menu");
}
/*Home menu icon*/
/*Carrosuel*/
const carouselContainer = document.querySelector('.carousel__container');
const prevButton = document.querySelector('.carousel__button--prev');
const nextButton = document.querySelector('.carousel__button--next');

let position = 0;
const itemWidth = 200;
const totalItems = document.querySelectorAll('.carousel__item').length;

prevButton.addEventListener('click', () => {
    position += itemWidth;
    if (position > 0) {
        position = -itemWidth * (totalItems - 1);
    }
    carouselContainer.style.transform = `translateX(${position}px)`;
});

nextButton.addEventListener('click', () => {
    position -= itemWidth;
    if (position < -itemWidth * (totalItems - 1)) {
        position = 0;
    }
    carouselContainer.style.transform = `translateX(${position}px)`;
});
