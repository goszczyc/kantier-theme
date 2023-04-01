export default () => {
	const sliderContainer = document.querySelector('.logo-slider');
	if(!sliderContainer) return;

	import('../inits/logo-slider_init').then(module => {
		const logoSliderInit = module.default;

		logoSliderInit();
	})
}