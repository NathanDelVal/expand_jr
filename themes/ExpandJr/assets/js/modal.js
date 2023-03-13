var LP_1 = document.querySelector("#LP_1");
var LP_2 = document.querySelector("#LP_2");
var LE_1 = document.querySelector("#LE_1");
var LE_2 = document.querySelector("#LE_2");
var LE_3 = document.querySelector("#LE_3");
var LE_4 = document.querySelector("#LE_4");
const close_modal = document.querySelector("#modal_close");
let modal_title = document.querySelector("#modal_title");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");

const toggle_modal = () =>{
    modal.classList.toggle("modal_hide");
    fade.classList.toggle("modal_hide");
}

let change_title1 = () => {
    modal_title.innerHTML = "";
    modal_title.innerHTML = `<h3>${LP_1.textContent}</h3>`;
}
let change_title2 = () => {
    modal_title.innerHTML = "";
    modal_title.innerHTML = `<h3>${LP_2.textContent}</h3>`;
}
let change_title3 = () => {
    modal_title.innerHTML = "";
    modal_title.innerHTML = `<h3>${LE_1.textContent}</h3>`;
}
let change_title4 = () => {
    modal_title.innerHTML = "";
    modal_title.innerHTML = `<h3>${LE_2.textContent}</h3>`;
}
let change_title5 = () => {
    modal_title.innerHTML = "";
    modal_title.innerHTML = `<h3>${LE_3.textContent}</h3>`;
}
let change_title6 = () => {
    modal_title.innerHTML = "";
    modal_title.innerHTML = `<h3>${LE_4.textContent}</h3>`;
}

LP_1.addEventListener("click", () => change_title1());
LP_2.addEventListener("click", () => change_title2());
LE_1.addEventListener("click", () => change_title3());
LE_2.addEventListener("click", () => change_title4());
LE_3.addEventListener("click", () => change_title5());
LE_4.addEventListener("click", () => change_title6());

[LP_1, LP_2, LE_1, LE_2, LE_3, LE_4, close_modal].forEach((el) =>{
    el.addEventListener("click", () => toggle_modal());
});