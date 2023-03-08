<?php 
// Variables
define('ROOT_DIR', get_theme_file_path());
define('STYLES_DIR', get_template_directory_uri() . '/assets/css');
define('IMAGES_DIR', get_template_directory_uri() . '/assets/images');
define('JS_DIR', get_template_directory_uri() . '/assets/js');
define('INC_DIR', ROOT_DIR . '/includes');
define('INCLUDES_DIR', ROOT_DIR . '/includes');


// Includes
include_once(INCLUDES_DIR . '/enqueue.php');
include_once(INCLUDES_DIR . '/setup-theme.php');


// Hooks
add_action('wp_enqueue_scripts', 'expandjr_style');
add_action('after_setup_theme', 'expandjr_setup_theme');
add_action('wp_head', 'wpb_track_post_views');

// Functions

/* Incrementa as views de um post quando acessado */
function wpb_track_post_views($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    $views = get_post_meta( $post_id, 'post_views_count', true );
    if ( !$views ) {
        $views = 0;
    }
    $views++;
    update_post_meta( $post_id, 'post_views_count', $views );
}


?> 