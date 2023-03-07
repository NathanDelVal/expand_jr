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

?>