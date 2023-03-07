<?php
function expandjr_setup_theme(){
    /* logo */
    add_theme_support('custom-logo');
    
    /* menus */
    register_nav_menus([
        'links' => 'Menu de Links'
    ] );
}

?>