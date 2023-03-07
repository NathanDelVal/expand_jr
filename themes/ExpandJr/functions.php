<?php 
define('ROOT_DIR', get_theme_file_path());
define('STYLES_DIR', get_template_directory_uri() . '/assets/css');
define('IMAGES_DIR', get_template_directory_uri() . '/assets/images');
define('INCLUDES_DIR', ROOT_DIR . '/includes');
define('JS_DIR', get_template_directory_uri() . '/assets/js');




include_once(INCLUDES_DIR . '/enqueue.php');
include_once(INCLUDES_DIR . '/setup-theme.php');


add_action('wp_enqueue_scripts', 'expandjr_style');
add_action('after_setup_theme', 'expandjr_setup_theme');

<?php

define('STYLES_DIR', get_template_directory_uri() . '/assets/css');
define('SCRIPTS_DIR', get_template_directory_uri() . '/assets/js');

function expandjr_enqueue_style(){

    //registrar js
    wp_register_script('slider-cases', SCRIPTS_DIR .'/slider.js', [], '1.0.0', true);

    //enfileirando reset
    wp_enqueue_style('expandjr-reset', STYLES_DIR . '/reset.css', [], '1.0.0', false);
    //enfileirando style.css
    wp_enqueue_style('expandjr-style', STYLES_DIR . '/style.css', [], '1.0.0', false);
    //enfileirando style da home
    wp_enqueue_style('expandjr-home-style', STYLES_DIR . '/home.css', [], '1.0.0', false);

    //estilo do slide 1
    wp_enqueue_style('expandjr-slider1-style', STYLES_DIR . '/slider1.css', [], '1.0.0', false);

    //enfileirando fontes do google
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&display=swap', [], null);


}
add_action('wp_enqueue_scripts', 'expandjr_enqueue_style');
?>
?>