<?php 

function expandjr_setup_theme(){
    add_theme_support('custom-logo');
    add_theme_support('menus');
    register_nav_menus([
        'primary' => 'Primary',
        'links' => 'Menu de Links', 
        'Whatsapp' => 'Ícone flutuante do whatsapp'
    ]);
}


?>