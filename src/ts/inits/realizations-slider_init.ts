import Swiper, { Autoplay, Navigation } from "swiper";
import "swiper/css";
import "swiper/css/effect-fade";

export default () => {
  let slideDuration = 5000;
  const swiper = new Swiper(".realizations-slider", {
    modules: [Autoplay, Navigation],
    loop: true,
    spaceBetween: 40,
    fadeEffect: {
		crossFade: true,
    },
    autoplay: {
		delay: slideDuration,
		waitForTransition: false,
    },
    navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
    },
	slidesPerView: 1,
	breakpoints: {
		576: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3
		},
		1200: {
			slidesPerView: 4
		}
		
		
	}
  });
};
