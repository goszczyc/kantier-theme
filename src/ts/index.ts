// require("fslightbox");
import menu_handle from "./handlers/menu_handle";
import slider_handle from "./handlers/slider_handle";
import logoSlider_handle from "./handlers/logo-slider_handle";
import map_handle from "./handlers/map_handle";
import realizationsSlider_handle from "./handlers/realizations-slider_handle";
import observer from "./observer";
import realizations_handle from "./handlers/realizations_handle";

document.addEventListener("DOMContentLoaded", () => {
    menu_handle();
    slider_handle();
    logoSlider_handle();
    map_handle();
    realizationsSlider_handle();
    cf7_submit();
    observer();
    realizations_handle();
});

function cf7_submit() {
    const forms = document.querySelectorAll(
        ".wpcf7"
    ) as NodeListOf<HTMLElement>;

    forms.forEach((form) => {
        form.addEventListener("wpcf7submit", (e) => {
            let target = e.currentTarget as HTMLElement;
            let outputField = target.querySelector(
                ".wpcf7-response-output"
            ) as HTMLElement;
            outputField.classList.remove("d-none");
        });
        form.addEventListener("wpcf7mailsent", (e) => {
            let target = e.currentTarget as HTMLElement;
            let outputField = target.querySelector(
                ".wpcf7-response-output"
            ) as HTMLElement;

            setTimeout(function () {
                outputField.classList.add("d-none");
            }, 3000);
        });
    });
}
