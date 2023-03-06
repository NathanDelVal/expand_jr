<?php 
function expandjr_style(){
    wp_register_style('reset', ROOT_DIR . '/reset.css', [], '1.0.0', false);
    wp_register_style('style', get_stylesheet_uri(), [], '1.0.0', false);
    wp_register_style('expandjr_header', STYLES_DIR . '/header.css', [], '1.0.0', false);
    wp_register_style('expandjr_font', "https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap");
    wp_register_script('header_script', JS_DIR . '/header.js', [], '1.0.0', true);

    
    wp_enqueue_style('reset');
    wp_enqueue_style('style');
    wp_enqueue_style('expandjr_header');
    wp_enqueue_style('expandjr_font');
    wp_enqueue_script('header_script');
}

?>