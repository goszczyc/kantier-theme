export default () => {
    const menu = document.querySelector("#header-nav") as HTMLElement;

    if (!menu) return;

    import("../inits/menu_init").then((module) => {
        const menu_init = module.default;

        menu_init(menu);
    });
};
