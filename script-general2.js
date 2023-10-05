const container = document.querySelector('.container-home');
const carousel = document.querySelector('.carousel-home');
const images = document.querySelectorAll('.carousel-home img');
const imageWidth = images[0].clientWidth;
let currentIndex = 0;

function nextSlide() {
	currentIndex = (currentIndex + 1) % images.length;
	updateCarousel();
}

function updateCarousel() {
	carousel.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
}

setInterval(nextSlide, 2000);
