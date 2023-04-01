import Swiper, { EffectFade, Pagination, Autoplay } from "swiper";
import "swiper/css";
import "swiper/css/effect-fade";

export default () => {
    let slideDuration = 5000;
    const swiper = new Swiper(".banner__slider", {
        modules: [EffectFade, Pagination, Autoplay],
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        loop: true,
        allowTouchMove: false,
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: false,
            renderBullet: function (index, className) {
                return `
				<span class="${className} inline-block slider-loader">
				<svg class="progress-ring -rotate-90" height="28" width="28">
					<circle
						stroke="white"
						stroke-width="2"
						fill="transparent"
						r="10"
						cx="14"
						cy="14"
						/>
						<circle
						class="progress-ring__circle"
						stroke-width="2" 
						fill="transparent"
						r="10"
						cx="14"
						cy="14"
					/>
				</svg></span>`;
            },
        },
        autoplay: {
            delay: slideDuration,
            waitForTransition: false,
        },
    });
    handleProgressRing();
    swiper.on('realIndexChange', handleProgressRing);

    function handleProgressRing() {
        let currentCircle = document.querySelector(
            ".swiper-pagination-bullet-active .progress-ring__circle"
        ) as SVGCircleElement;
        const radius = currentCircle.r.baseVal.value;
        let circumference = radius * 2 * Math.PI;
        currentCircle.classList.add("stroke-primary");
        currentCircle.style.strokeDasharray = `${circumference} ${circumference}`;
        currentCircle.style.strokeDashoffset = `${circumference}`;

        currentCircle.animate([{ strokeDashoffset: "0" }], {
            duration: slideDuration,
        });
    }
};
