import "../css/app.css";

console.log("estoy vinculado");


document.addEventListener("DOMContentLoaded", function() {
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    mobileMenuButton.addEventListener("click", function() {
        // Obtén el estado actual de visibilidad del menú desplegable
        const isMobileMenuVisible = mobileMenu.style.display === "block";

        // Alterna la visibilidad del menú desplegable
        if (isMobileMenuVisible) {
            mobileMenu.style.display = "none";
        } else {
            mobileMenu.style.display = "block";
        }
    });
});
