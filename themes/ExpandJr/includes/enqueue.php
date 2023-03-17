<?php

function expandjr_style(){
    
    // Register 
    /* style */
    wp_register_style('expandjr-reset', STYLES_DIR . '/reset.css', [], '1.0.0', false);
    wp_register_style('expandjr-style', STYLES_DIR . '/style.css', [], '1.0.0', false);
    wp_register_style('expandjr-footer', STYLES_DIR . '/footer.css', [], '1.0.0', false);
    wp_register_style('expandjr-blog', STYLES_DIR . '/page-blog.css', [], '1.0.0', false);
    wp_register_style('expandjr_header', STYLES_DIR . '/header.css', [], '1.0.0', false);
    wp_register_style('expandjr-home-style', STYLES_DIR . '/home.css', [], '1.0.0', false);
    wp_register_style('expandjr-slider1-style', STYLES_DIR . '/slider1.css', [], '1.0.0', false);
    wp_register_style('expandjr-quem-somos-style', STYLES_DIR . '/page-quem-somos.css', [], '1.0.0', false);
    wp_register_style('expandjr-slider2-style', STYLES_DIR . '/slider2.css', [], '1.0.0', false);

    /*SwiperJS*/
    wp_register_style('swiperjs', "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css", [], '1.0.0', false);
    
    /* fonts */
    wp_register_style('expandjr-barlow-font', 'https://fonts.googleapis.com/css2?family=Barlow:wght@300;500;600;700&display=swap');
    wp_register_style('expandjr-roboto-font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

    
    /* js */
    wp_register_script('slider-cases', JS_DIR .'/slider.js', [], '1.0.0', true);
    wp_register_script('header_script', JS_DIR . '/header.js', [], '1.0.0', true);
    wp_register_script('modal_script', JS_DIR . '/modal.js', [], '1.0.0', true);
    wp_register_script('slider2', JS_DIR . '/slider2.js', [], '1.0.0', true);
    wp_register_script('swiperjs_script', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', [], '1.0.0', true);
<<<<<<< HEAD
=======
    wp_register_script('counter_script', JS_DIR . '/counter.js', [], '1.0.0', true);
    wp_register_script('popup_script', JS_DIR . '/popup.js', [], '1.0.0', true);
>>>>>>> 5e7365de07d11d4e2766c80edad0861e378d773d

    // Enqueue 
    
    
    /* style */
    wp_enqueue_style('expandjr-reset');
    wp_enqueue_style('expandjr-style');
    wp_enqueue_style('expandjr-home-style');
    wp_enqueue_style('expandjr-blog');
    wp_enqueue_style('expandjr_header');
    wp_enqueue_style('expandjr-footer');
    wp_enqueue_style('expandjr-slider1-style');
    wp_enqueue_style('expandjr-quem-somos-style');
    wp_enqueue_style('expandjr-slider2-style');

    /*swiperjs style*/ 
    wp_enqueue_style('swiperjs');
    
    
    /* fonts */
    wp_enqueue_style('expandjr-barlow-font');
    wp_enqueue_style('expandjr-roboto-font');

    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&display=swap', [], null);
    
    
    /* js */
    wp_enqueue_script('header_script');
    wp_enqueue_script('slider-cases');
    wp_enqueue_script('modal_script');
    wp_enqueue_script('slider2');
    wp_enqueue_script('swiperjs_script');
<<<<<<< HEAD

=======
    wp_enqueue_script('counter_script');
    wp_enqueue_script('popup_script');
>>>>>>> 5e7365de07d11d4e2766c80edad0861e378d773d
}