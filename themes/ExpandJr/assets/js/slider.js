let count=1;
document.getElementById("radio1").checked = true;



setInterval(function(){
  nextSlide();
},4000)

function nextSlide(){
  count++;
  if(count >4){
    count=1;
  }

  document.getElementById("radio"+count).checked = true;
}

var slideIndex=1;

function plusSlides(n) {
  nextSlide(slideIndex += n);
}






/*
var slideIndex = 1;
  
showSlides(slideIndex);

//para passar ou retonar o slide a lcicar no botao
function plusSlides(n) {
  showSlides(slideIndex += n);
}

//slide atual
function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length} ;
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  
}*/
