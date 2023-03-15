var circle1 = document.querySelector("#jornada_circle1");
var circle2 = document.querySelector("#jornada_circle2");
var circle3 = document.querySelector("#jornada_circle3");
var circle4 = document.querySelector("#jornada_circle4");
var para1 = document.querySelector("#paragraph1");
var para2 = document.querySelector("#paragraph2");
var para3 = document.querySelector("#paragraph3");
var para4 = document.querySelector("#paragraph4");

let change_part1 = () => {
    
    para1.classList.toggle("paragraph1_hide");
}
let change_part2 = () => {
    para2.classList.toggle("paragraph2_hide");
}
let change_part3 = () => {
    para3.classList.toggle("paragraph3_hide");
}
let change_part4 = () => {
    para4.classList.toggle("paragraph4_hide");
}



circle1.addEventListener("click", () => change_part1());
circle2.addEventListener("click", () => change_part2());
circle3.addEventListener("click", () => change_part3());
circle4.addEventListener("click", () => change_part4());