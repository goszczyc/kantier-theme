export default () => {
    const mapContainer = document.querySelector("#map");

    if (!mapContainer) return;

    import("../inits/map_init").then((module) => {
		const map_init = module.default;

		map_init(mapContainer);
	});
};
