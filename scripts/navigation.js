document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector(".nav-toggle");
    const nav = document.querySelector(".nav-list");

    if (toggle && nav) {
        toggle.addEventListener("click", () => {
            toggle.classList.toggle("is-open");
            nav.classList.toggle("is-open");

            const expanded = toggle.getAttribute("aria-expanded") === "true";
            toggle.setAttribute("aria-expanded", !expanded);
        });
    }
});
