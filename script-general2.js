const carousel = document.querySelector('.carousel');
const images = document.querySelectorAll('.carousel li');
const imageWidth = images[0].clientWidth;
let currentIndex = 0;

function nextSlide() {
	currentIndex = (currentIndex + 1) % images.length;
	updateCarousel();
}

function updateCarousel() {
	carousel.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
}

setInterval(nextSlide, 6200);