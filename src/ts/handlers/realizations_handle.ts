import realizationLightbox from "./realizationLightbox";
import "../../sass/sub/realization-lightbox.scss";

export default () => {
    const images = document.querySelectorAll("[data-lightbox]");
    const galleryTemplate = document.querySelector(
        "#gallery-template"
    ) as HTMLTemplateElement;
    const container = document.querySelector(".realizations-container");

    images.forEach((image) => {
        image.addEventListener("click", (e) => {
            e.preventDefault();
            let target = e.currentTarget as HTMLAnchorElement;
            let galleryName = target.getAttribute("data-lightbox");

            let gallery = Array.from(images).filter(
                (image) => image.getAttribute("data-lightbox") === galleryName
            );

            let newGallery = galleryTemplate.content.cloneNode(true);

            container.appendChild(newGallery);

            let galleryContainer =
                container.querySelector(".gallery-container");
            let mainSlider = galleryContainer.querySelector(
                ".lightbox-images .swiper-wrapper"
            );
            let thumbsSlider = galleryContainer.querySelector(
                ".lightbox-thumbs .swiper-wrapper"
            );

            // let images = Array;

            gallery.forEach((image) => {
                let mainSlide = document.createElement("DIV");
                let mainImage = document.createElement("IMG");
                mainSlide.setAttribute(
                    "class",
                    "swiper-slide relative pb-[47%]"
                );
                mainImage.setAttribute(
                    "class",
                    "absolute top-0 left-0 rounded-3xl h-full w-full object-cover "
                );
                mainImage.setAttribute("src", image.getAttribute("href"));
                mainSlide.appendChild(mainImage);
                mainSlider.appendChild(mainSlide);

                let thumbSlide = document.createElement("DIV");
                let thumbImage = document.createElement("IMG");
                thumbSlide.setAttribute(
                    "class",
                    "swiper-slide relative pb-[30%] sm:pb-[20%] md:pb-[15%] lg:pb-[10%] rounded-3xl overflow-hidden cursor-pointer"
                );
                thumbImage.setAttribute(
                    "class",
                    "absolute top-0 left-0 w-full grayscale transition-all duration-300"
                );
                thumbImage.setAttribute(
                    "src",
                    image.getAttribute("data-thumb")
                );
                thumbSlide.appendChild(thumbImage);
                thumbsSlider.appendChild(thumbSlide);
            });

            import("./realizationLightbox").then((module) => {
                let realizationLightbox = module.default;
                realizationLightbox();
            });

            galleryContainer.addEventListener("click", (e) => {
                e.preventDefault();

                if (e.target === galleryContainer) galleryContainer.remove();
            });

            let exitBtn = galleryContainer.querySelector(".lightbox-exit");

            exitBtn.addEventListener("click", (e) => {
                e.preventDefault();
                galleryContainer.remove();
            });
        });
    });
};
