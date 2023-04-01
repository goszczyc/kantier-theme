import fadeOut from "../helpers/fadeOut";
import fadeIn from "../helpers/fadeIn";
import animateHeight from "../helpers/animateHeight";

export default (menu: HTMLElement) => {
    const burger = document.querySelector("#burger") as HTMLElement;
    const subMenuBtns = document.querySelectorAll(
        ".has-sub"
    ) as NodeListOf<HTMLElement>;
    const subMenuExitBtns = document.querySelectorAll(
        "main-menu__sub-menu-exit"
    );

    // Handle burger on mobile
    burger.addEventListener("click", async (e) => {
        e.preventDefault();
        burger.classList.toggle("burger--active");

        if (menu.classList.contains("main-menu--active")) {
            await fadeOut(menu);
            menu.classList.remove("main-menu--active");
			document.body.style.height = 'unset';
			document.body.style.overflow = 'unset';
        } else {
            menu.classList.add("main-menu--active");
			document.body.style.height = '100vh';
			document.body.style.overflow = 'hidden';
            fadeIn(menu);
        }
    });

    // Toggle sub menus
    subMenuBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            let target = e.currentTarget as HTMLElement;
            let arrow = target.querySelector('.main-menu__arrow') as HTMLElement;
            let subMenu = target.nextElementSibling as HTMLElement;
            let activeClass = "main-menu__sub-menu--active";
            arrow.classList.toggle('rotate-180');
            animateHeight(subMenu, activeClass);
        });
    });

    window.addEventListener("scroll", (e) => {
		const header = document.querySelector('.header') as HTMLElement;
		const logo = header.querySelector('.logo') as HTMLElement;

		if(window.scrollY > 10) {
			header.classList.add('header--scrolled')
		} else {
			header.classList.remove('header--scrolled')
		}
	});
};
