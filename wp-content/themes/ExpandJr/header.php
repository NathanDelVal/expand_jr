<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="./style.css">
    <title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
<?php get_body_class(); ?>
<header class = 'header'>
    <?php the_custom_logo(); ?>
    <nav class = 'header_nav'>
        <?php wp_nav_menu(['menu' => 'primary',
                            'menu_class' => 'header_nav_menu']) ?>
        <div class = 'header_lang'>
        <?php echo do_shortcode('[gtranslate]'); ?>
        </div>
        
    </nav>
   












</header>