export default (element: HTMLElement, activeClass: string) => {
    let initialHeight = element.offsetHeight;
    let duration = 300;

    if (element.classList.contains(activeClass)) {
        setTimeout(function () {
            element.classList.remove(activeClass);
            return;
        }, duration - 50);
        element.animate(
            [
                {
                    height: initialHeight + "px",
                },
                {
                    height: "0px",
                },
            ],
            {
                duration: duration,
            }
        );
    } else {
        element.classList.add(activeClass);
        element.animate(
            [
                {
                    height: 0,
                },
                {
                    height: element.offsetHeight + "px",
                },
            ],
            {
                duration: duration,
            }
        );
    }
};
