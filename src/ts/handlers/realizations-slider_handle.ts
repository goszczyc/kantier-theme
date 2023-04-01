export default () => {
    const bannerSlider = document.querySelector(".realizations-slider");

    if (!bannerSlider) return;

    import("../inits/realizations-slider_init").then((module) => {
        const slider_init = module.default;

        slider_init();
    });
};
