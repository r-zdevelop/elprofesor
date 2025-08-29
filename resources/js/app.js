import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.getElementById("mobile-menu-button");
    const menu = document.getElementById("mobile-menu");

    if (menuBtn && menu) {
        menuBtn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    }
});
