// script.js

document.addEventListener("DOMContentLoaded", () => {
    // Carousel functionality
    const carouselContainer = document.querySelector(".carousel-container");
    let isDown = false;
    let startX;
    let scrollLeft;

    carouselContainer.addEventListener("mousedown", (e) => {
        isDown = true;
        carouselContainer.classList.add("active");
        startX = e.pageX - carouselContainer.offsetLeft;
        scrollLeft = carouselContainer.scrollLeft;
    });

    carouselContainer.addEventListener("mouseleave", () => {
        isDown = false;
        carouselContainer.classList.remove("active");
    });

    carouselContainer.addEventListener("mouseup", () => {
        isDown = false;
        carouselContainer.classList.remove("active");
    });

    carouselContainer.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - carouselContainer.offsetLeft;
        const walk = (x - startX) * 3; // Adjust scroll speed
        carouselContainer.scrollLeft = scrollLeft - walk;
    });

    // Add to Cart functionality
    const cart = [];
    const addToCartButtons = document.querySelectorAll(".add-to-cart");

    addToCartButtons.forEach((button) => {
        button.addEventListener("click", (e) => {
            const product = e.target.closest(".carousel-item");
            const productName = product.querySelector("h3").textContent;
            const productPrice = product.querySelector("p").textContent;

            cart.push({
                name: productName,
                price: productPrice,
            });

            alert(`${productName} është shtuar në shportë!`);
            console.log("Shporta aktuale:", cart);
        });
    });
});