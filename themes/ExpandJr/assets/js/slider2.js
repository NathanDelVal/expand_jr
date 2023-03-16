document.addEventListener('DOMContentLoaded', () => {
    var mySwiper = new Swiper('.swiper-container', {
      // Optional parameters
       
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },
    
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    
      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    
          slidesPerView: 3,
          spaceBetween: 30,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
    });
  })
  
    // And if we need scrollbar
    
   
  
  