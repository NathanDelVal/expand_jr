function ptmudatdr(){
    let pt = document.querySelector("#pt-en-tdr");
    pt.style.display = "none";
    let en = document.querySelector("#en-pt-tdr");
    en.style.display = "flex";
}
function enmudatdr(){
    let en = document.querySelector("#en-pt-tdr");
    en.style.display = "none";
    let pt = document.querySelector("#pt-en-tdr");
    pt.style.display = "flex";
}

document.querySelector("#pt-en-tdr").addEventListener("click", ptmudatdr);
document.querySelector("#en-pt-tdr").addEventListener("click", enmudatdr);