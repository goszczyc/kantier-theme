export default () => {
    const bannerSlider = document.querySelector(".banner__slider") as HTMLElement;

    if (!bannerSlider) return;

    import("../inits/slider_init").then((module) => {
		const slider_init = module.default;

		slider_init();
	});
};
