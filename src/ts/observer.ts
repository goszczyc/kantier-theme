export default () => {
    let options = {
        rootMargin: "0px",
        threshhold: 0.3,
    };

    let entries = document.querySelectorAll(".observe");

    let observer = new IntersectionObserver(startAnimation, options);

    entries.forEach((entry) => {
        observer.observe(entry);
    });
};

function startAnimation(entries, observer) {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.remove("faded-out");
            // observer.unobserve(entry);
        }
    });
}
