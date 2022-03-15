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
		slidesPerView: 1,
		spaceBetween: 1,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		// Responsive breakpoints
		breakpoints: {
			// when window width is >= 640px
			640: {
				slidesPerView: 2,
			},
			// when window width is >= 768px
			768: {
				slidesPerView: 3,
			},
			// when window width is >= 1024px
			1024: {
				slidesPerView: 4,
			},
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

// set bottom padding to site
const botomFooter = () => {
	const siteElement = document.querySelector(".site");
	const footerHeight = document.querySelector("footer").offsetHeight;
	siteElement.style.paddingBottom = footerHeight + "px";
};
window.onload = botomFooter();

//Show "Razón Social" when "RUC" is selected.

if (document.getElementById("billing_taxes_name_field")) {
	//hide "Razón Social"
	const razonSocial = document.getElementById("billing_taxes_name_field");
	razonSocial.style.height = 0;
	razonSocial.style.overflow = "hidden";
	razonSocial.style.margin = 0;
	razonSocial.style.paddingTop = 0;
	razonSocial.style.transitionDuration = "300ms";
	razonSocial.style.transitionProperty = "height";
	razonSocial.style.transitionTimingFunction = "ease-in-out";

	//Show "Razón Social" when ruc is selected
	const selectTag = document.querySelector("#billing_id_type_field .select");
	selectTag.addEventListener("change", (e) => {
		const option = e.target.value;
		if (option === "ruc") {
			razonSocial.style.height = "80px";
		} else {
			razonSocial.style.height = "0";
		}
	});
}
