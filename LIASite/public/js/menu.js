const hamburger = document.querySelector(".hamburger");
const dropMenu = document.querySelector(".drop-menu");
const dropMenuText = document.querySelectorAll(".drop-menu a");
let isOpen = false;

// Get tailwind classes from app.css
dropMenu.classList.add("animate-dropDown");
dropMenuText.forEach((link) => link.classList.add("animate-dropText"));

// Toggle to make it possible to click a second time
const toggleDropMenu = () => {
    dropMenu.classList.toggle("hidden");
    dropMenu.classList.toggle("flex");
    isOpen = !isOpen;
};

// Add reverse(close) animation to dropmenu
const hideDropMenu = () => {
    dropMenu.classList.add("animate-dropDownReverse");
    setTimeout(() => {
        dropMenu.classList.add("hidden");
        dropMenu.classList.remove("flex");
        dropMenu.classList.remove("animate-dropDownReverse");
    }, 300);
    isOpen = false;
};

hamburger.addEventListener("click", () => {
    if (isOpen) {
        hideDropMenu();
    } else {
        toggleDropMenu();
    }
});

hamburger.addEventListener("mouseover", () => {
    if (!isOpen) {
        dropMenu.classList.remove("hidden");
        dropMenu.classList.add("flex");
        isOpen = true;
    }
});

dropMenu.addEventListener("mouseleave", hideDropMenu);