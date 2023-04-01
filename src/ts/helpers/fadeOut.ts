export default (item) => {
    return new Promise<void>((resolve, reject) => {
        item.animate([{ opacity: 1 }, { opacity: 0 }], { duration: 100 });
        setTimeout(function () {
            resolve();
        }, 90);
    });
};
