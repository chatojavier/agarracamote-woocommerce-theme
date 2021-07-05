import "../sass/main.scss";

import "./components/menu";

// import Swiper JS
import Swiper from "swiper";

// core version + navigation, pagination modules:
import SwiperCore, { Navigation, Thumbs, Lazy, Controller } from "swiper/core";

// configure Swiper to use modules
SwiperCore.use([Navigation, Thumbs, Lazy, Controller]);

// Artistas Carousel
if (document.querySelector(".artistas-carousel")) {
	let swiper = new Swiper(".artistas-carousel", {
		slidesPerView: 4,
		spaceBetween: 1,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
}

// Products Slider
if (document.querySelectorAll(".product-slider__carousel").length > 0) {
	// product Pics Slider Config
	var thumbSwiper = new Swiper(".thumb-slider__carousel", {
		spaceBetween: 10,
		slidesPerView: 5,
		freeMode: false,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		slidesPerGroup: 5,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});

	var productSwiper = new Swiper(".product-slider__carousel", {
		spaceBetween: 0,
		// Disable preloading of all images
		preloadImages: false,
		// Enable lazy loading
		lazy: true,
		thumbs: {
			swiper: thumbSwiper,
		},
	});
	// //function next prev
	// productSwiper.controller.control = thumbSwiper;
	// thumbSwiper.controller.control = productSwiper;
}

// Zoom hover image
window.zoomer = function zoom(event, offsetX, offsetY, x, y) {
	var zoomer = event.currentTarget;
	var dataBg = zoomer.dataset.background;
	var imgBg = zoomer.style.backgroundImage;
	console.log(imgBg);
	if (!dataBg) return;
	if (dataBg !== imgBg) {
		zoomer.style.backgroundImage = `url("${dataBg}")`;
		zoomer.style.backgroundSize = "auto";
	}
	event.offsetX
		? (offsetX = event.offsetX)
		: (offsetX = event.touches[0].pageX);
	event.offsetY
		? (offsetY = event.offsetY)
		: (offsetX = event.touches[0].pageX);
	x = (offsetX / zoomer.offsetWidth) * 100;
	y = (offsetY / zoomer.offsetHeight) * 100;
	zoomer.style.backgroundPosition = x + "% " + y + "%";
};

// Move the footer to the botom if the page is smaller than the window
const botomFooter = () => {
	const documentHeight = document.documentElement.offsetHeight;
	const windowHeight = window.innerHeight;
	if (documentHeight < windowHeight) {
		const footerEl = document.querySelector("footer");
		setTimeout(() => {
			footerEl.classList.add("absolute", "bottom-0", "w-full");
		}, 2000);
	} else {
		return;
	}
};

document.addEventListener("DOMContentLoaded", botomFooter());
