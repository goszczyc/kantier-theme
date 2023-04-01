import Swiper, { Autoplay } from "swiper";
import "swiper/css";

export default () => {
    const swiper = new Swiper(".logo-slider", {
        modules: [Autoplay],
        slidesPerView: 2,
		spaceBetween: 30,
        autoplay: {
            delay: 2000
        },
		breakpoints: {
			576: {
				slidesPerView: 3
			},
			768: {
				slidesPerView: 4
			},
			992: {
				slidesPerView: 5
			},
		}
    });
};
