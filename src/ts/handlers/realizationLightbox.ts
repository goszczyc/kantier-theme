import Swiper, { Thumbs, Navigation, EffectFade } from "swiper";
export default () => {
    let thumbsSlider = new Swiper(".lightbox-thumbs", {
        slidesPerView: 2,
        spaceBetween: 40,
        breakpoints: {
            576: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
            },
            992: {
                slidesPerView: 5,
            },
            1200: {
                slidesPerView: 6,
            },
            1440: {
                slidesPerView: 7,
            },
        },
    });
    let mainSlider = new Swiper(".lightbox-images", {
        modules: [Thumbs, Navigation, EffectFade],
        slidesPerView: 1,
        thumbs: {
            swiper: thumbsSlider,
        },
        effect: "fade",
        navigation: {
            nextEl: '.lightbox-next',
            prevEl: '.lightbox-prev'
        }
    });
};
