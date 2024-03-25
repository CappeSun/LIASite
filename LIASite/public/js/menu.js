const hamburger = document.querySelector(".hamburger");
const dropMenu = document.querySelector(".drop-menu");
let isOpen = false;

// Get taiilwind classes from app.css
dropMenu.classList.add("animate-dropDown");
dropMenu.classList.add("origin-top-center");

hamburger.addEventListener("click", () => {

    dropMenu.classList.toggle("hidden");
    dropMenu.classList.toggle("flex");
    isOpen = !isOpen;
});