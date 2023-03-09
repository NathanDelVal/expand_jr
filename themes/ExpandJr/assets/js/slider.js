var slideIndex = 1;


showSlides(slideIndex);
showSlidesAuto();

function plusSlides(n) {
  showSlides(slideIndex += n);
}


function currentSlide(n) {
  showSlides(slideIndex = n);
 
}


function showSlides(n) {
 
  var i;
  var slides = document.getElementsByClassName("slides");
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
 
}


function showSlidesAuto() {
  let i;
  let slides = document.getElementsByClassName("slides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if ((slideIndex-1)> slides.length) {slideIndex = 0}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-2].style.display = "block";  
  dots[slideIndex-2].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}






/* SLIDER TIAGO********************
const slides = document.getElementsByClassName('slide_case')
console.log('ola slider')
for(var i=0, max=slides.length; i < max; i++){
  slides[i].animate(
    [
      {transform:'translateX(600px)', ease:'ease-in'},
      {transform: 'translateX(-2000px)'}
    ],
    {
      duration:15000,
      iterations:Infinity,
      fill:"forwards"
    }
  )
}




*/








/*let count=1;
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


*/






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
