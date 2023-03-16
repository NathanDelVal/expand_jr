var circle1 = document.querySelector("#jornada_circle1");
var circle2 = document.querySelector("#jornada_circle2");
var circle3 = document.querySelector("#jornada_circle3");
var circle4 = document.querySelector("#jornada_circle4");
var intern_circles = document.querySelectorAll(".contato_jornada_container_stage_intern_circle");
var para1 = document.querySelector("#paragraph1");
var para2 = document.querySelector("#paragraph2");
var para3 = document.querySelector("#paragraph3");
var para4 = document.querySelector("#paragraph4");

var paragrafos = [para1, para2, para3, para4];
var para_hides = ["paragraph1_hide", "paragraph2_hide", "paragraph3_hide", "paragraph4_hide"];

function hide_texts(){
    for(element of paragrafos){
        element.style.display = "none";
    }
}

let change_part1 = () => {
    hide_texts();
    intern_circles.forEach(element => {element.style.backgroundColor = "#999999"});
    circle1.style.backgroundColor = "#000000";
    para1.style.display = "block";
}
let change_part2 = () => {
    hide_texts();
    intern_circles.forEach(element => {element.style.backgroundColor = "#999999"});
    circle2.style.backgroundColor = "#000000";
    para2.style.display = "block";
}
let change_part3 = () => {
    hide_texts();
    intern_circles.forEach(element => {element.style.backgroundColor = "#999999"});
    circle3.style.backgroundColor = "#000000";
    para3.style.display = "block";
}
let change_part4 = () => {
    hide_texts();
    intern_circles.forEach(element => {element.style.backgroundColor = "#999999"});
    circle4.style.backgroundColor = "#000000";
    para4.style.display = "block";
}



circle1.addEventListener("click", () => change_part1());
circle2.addEventListener("click", () => change_part2());
circle3.addEventListener("click", () => change_part3());
circle4.addEventListener("click", () => change_part4());





var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}