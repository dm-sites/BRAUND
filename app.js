var menu = document.getElementById("menu")

var pijl = document.getElementById("pijl");
var kruis = document.getElementById("kruis");

const inViewport = (entries, observer) => {
    entries.forEach(entry => {
        entry.target.classList.toggle("is-inViewport", entry.isIntersecting);
    });
};

const Obs = new IntersectionObserver(inViewport);
const obsOptions = {}; 


function toggle_menu() {

    menu.classList.toggle("open-menu");
    pijl.classList.toggle("rotate-pijl");

}

pijl.addEventListener("click", toggle_menu);
kruis.addEventListener("click", toggle_menu);

document.querySelectorAll('[data-inviewport]').forEach(el => {
    Obs.observe(el, obsOptions);
});