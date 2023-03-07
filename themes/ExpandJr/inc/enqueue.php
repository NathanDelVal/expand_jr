<?php

function expandjr_enqueue_style(){
    
    // Register style
    wp_register_style('expandjr-reset', STYLE_DIR . '/reset.css', [], '1.0.0', false);
    wp_register_style('expandjr-style', STYLE_DIR . '/style.css', [], '1.0.0', false);
    wp_register_style('expandjr-footer', STYLE_DIR . '/footer.css', [], '1.0.0', false);
    /* fonts */
    wp_register_style('expandjr-barlow-font', 'https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&display=swap');
    wp_register_style('expandjr-roboto-font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

    // Enqueue style
    wp_enqueue_style('expandjr-reset');
    wp_enqueue_style('expandjr-style');
    wp_enqueue_style('expandjr-footer');
    /* fonts */
    wp_enqueue_style('expandjr-barlow-font');
    wp_enqueue_style('expandjr-roboto-font');
}

?>