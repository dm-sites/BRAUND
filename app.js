var menu_bar = document.getElementById("menu-bar");

var menu_links = document.getElementById("menu-links")
var main_logo = document.getElementById("main-logo")
var menu_bg = document.getElementById("menu-bg")

function menuOnClick() {

    menu_bar.classList.toggle("change");
    menu_links.classList.toggle("change");
    main_logo.classList.toggle("change-main-logo");
    menu_bg.classList.toggle("change-bg");
}

menu_bar.addEventListener("click", menuOnClick);