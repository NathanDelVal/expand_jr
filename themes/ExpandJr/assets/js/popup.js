function showPopup() {
  var overlay = document.getElementById("overlay");
  var popup = document.getElementById("popup");

  overlay.classList.add("show");
  popup.classList.add("show");
}

function closePopup() {
  var overlay = document.getElementById("overlay");
  var popup = document.getElementById("popup");

  overlay.classList.remove("show");
  popup.classList.remove("show");

  setTimeout(function() {
    overlay.parentNode.removeChild(overlay);
  },500);
}

setTimeout(showPopup, 1000);

document.getElementById("closePopup").addEventListener("click", closePopup);