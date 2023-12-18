var menu = document.getElementById("menu")

var pijl = document.getElementById("pijl");
var kruis = document.getElementById("kruis");

var form_inputs = document.getElementById('inputs').getElementsByTagName('input')
var email_input = document.getElementById("email")

var verzend = document.getElementById("verzend")
var confirm = document.getElementById("confirm")

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

function display_confirm() {

    var amount_not_empty_inputs = 0

    for (var i = form_inputs.length - 1; i >= 0; i--)
    {
        var input = form_inputs[i]

        if (input.value == '' || input.value == input.defaultValue) {

            console.log("is empty")

        } else {

            console.log("is typed in")
            amount_not_empty_inputs += 1

        }

    }

    if (amount_not_empty_inputs == form_inputs.length){

        if (email_input.value.toLowerCase().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){

            confirm.classList.add("show-confirm");

        }

    }

}

pijl.addEventListener("click", toggle_menu);
kruis.addEventListener("click", toggle_menu);

verzend.addEventListener("click", display_confirm);

document.querySelectorAll('[data-inviewport]').forEach(el => {
    Obs.observe(el, obsOptions);
});