<?php
get_header();
?>

<div class="quem-somos-main">
    <div class="quem-somos-header">
        <h1 class="qs-title"> QUEM SOMOS </h1>
        <p class="qs-subtitle">Conheça um pouco da nossa história</p>
    </div>

    <div class="quem-somos-content">

        <div class="qs-secao1">
            <?php    
                $args = array('category_name' => 'quem-somos-sec1' );
                $cpt_query = new WP_Query($args);


                if ($cpt_query -> have_posts()) :
                    while ($cpt_query -> have_posts()) : $cpt_query -> the_post();?>

                            <img class="qs1_img" src="<?php echo the_field('img_qs'); ?>">
                            <div class="qs1-text-content">
                                <div class="qs1_title"><?php echo the_field('titulo_qs'); ?></div> 
                                <div class="qs1_text"><?php echo the_field('texto_qs'); ?> </div>  
                            </div>        
                        
                <?php endwhile;
                endif;
            ?>
        </div>

        <div class="qs-secao2">
            <div class= "frame_qs">

            <?php    
                $args = array('category_name' => 'quem-somos-sec2' );
                $cpt_query = new WP_Query($args);

                if ($cpt_query -> have_posts()) :
                    while ($cpt_query -> have_posts()) : $cpt_query -> the_post();?>
                        <div class="frame-content">
                            <img class="qs2_img" src="<?php echo the_field('img_qs'); ?>">
                            <div class="qs2_text"><?php echo the_field('texto_qs'); ?> </div>            
                        </div>
                        
                <?php endwhile;
                endif;
            ?>

            </div>

        </div>

        <div class="qs-secao3">
            <h2 class="qs-sec3-tittle"> O que nos move? </h2>
            <div class="valores">
            <?php    
                $args = array('category_name' => 'quem-somos-sec3' );
                $cpt_query = new WP_Query($args);

                if ($cpt_query -> have_posts()) :
                    while ($cpt_query -> have_posts()) : $cpt_query -> the_post();?>
                        <div class="valor">
                             <div class="qs3_title"><?php echo the_field('titulo_qs'); ?></div>
                             <img class="qs3_img" src="<?php echo the_field('img_qs'); ?>">
                             <div class="qs3_text"><?php echo the_field('texto_qs'); ?> </div>
                            
                        </div>
                        
                <?php endwhile;
                endif;
            ?>    

            </div>
        </div>

        <div class="qs-secao4">
        <?php    
                $args = array('category_name' => 'quem-somos-sec4' );
                $cpt_query = new WP_Query($args);

                if ($cpt_query -> have_posts()) :
                    while ($cpt_query -> have_posts()) : $cpt_query -> the_post();?>
                        <div class="qs-s4-content">
                            <div class="q-s4-text">
                                <div class="qs4_title"><?php echo the_field('titulo_qs'); ?></div>
                                <div class="qs4_text"><?php echo the_field('texto_qs'); ?> </div>
                            </div>
                            <img class="qs4_img" src="<?php echo the_field('img_qs'); ?>">
                        </div>
                        
                <?php endwhile;
                endif;
            ?>    

        </div>

    </div>




</div>


<?php
get_footer();
?>