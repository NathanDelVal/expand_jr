<?php
get_header();
?>


<div class="homepage_main">
<!-- SEÇAO SEJA BEM VINDO -->
<section class="welcome">
    <div class="welcome_content">
        <h1 class="title">Expanda seus horizontes</h1>
        <h2 class="subtitle">através das nossas soluções internacionais de alto impacto.</h2>
        <button class="welcome_btn"><a class="welcomebtn_text flashyText" href="<?php bloginfo('url');?>/contato/">Fale com um especialista</a></button>
    </div>
</section>


<!--SEÇAO SERVIÇOS-->
<section class="services">
    <h1 class="title_sections">Nossos Serviços</h1>
    <div class="services_content">        
            <!--SUBSEÇAO PESSOA FÍSICA-->
            <section class="legal_person service_type">
                <div class="LP_content service_content">
                     <h1 class="title_sections"> Para Você </h1>


                     <div class="LP_services">
                        <div class="LP_service service">
                            <img class="LP_image service_img">
                            <p class="LP_description service_description"> Dupla Cidadania Portuguesa </p>
                        </div>


                        <div class="LP_service service">
                            <img class="LP_image service_img">
                            <p class="LP_description service_description"> Assessoria para Emissão de Passaporte Brasileiro </p>
                        </div>


                     </div>


                </div>        
            </section>


             <div class="dividing_line">    
             </div>


            <!--SUBSEÇAO PESSOA JURIDICA-->
            <section class="legal_entity service_type">
                <div class="LE_content service_content" >
                    <h1 class="title_sections"> Para Sua Empresa </h1>


                    <div class="LE_services">
                        <div class="LE_service service">
                            <img class="LE_image service_img">
                            <p class="LE_description service_description"> Análise Burocrática </p>
                        </div>


                        <div class="LE_service service">
                            <img class="LE_image service_img">
                            <p class="LE_description service_description"> Estudo e Análise do Mercado </p>
                        </div>


<!--                         <div class="LE_service service">
                            <img class="LE_image service_img">
                            <p class="LE_description service_description"> Planejamento Logístico </p>
                        </div>


                        <div class="LE_service service">
                            <img class="LE_image service_img">
                            <p class="LE_description service_description"> Prospecção Internacional </p>
                        </div>

 -->


                    </div>


                </div>
            </section>
    </div>
</section>
   
<!--SEÇAO RESULTADOS-->
<section class="outcomes">
    <h1 class="subtitle">Resultados</h1>
    <div class="outcomes_numbers">
        <div class="outcome">
            <img class="outcome_image" src="url">
            <p class="outcome_number">YY</p>
            <p class="outcome_description">XXXXXX</p>
        </div>
        <div class="outcome">
            <img class="outcome_image" src="url">
            <p class="outcome_number">YY</p>
            <p class="outcome_description">XXXXXX</p>
        </div>
        <div class="outcome">
            <img class="outcome_image" src="url">
            <p class="outcome_number">YY</p>
            <p class="outcome_description">XXXXXX</p>
        </div>
        <div class="outcome">
            <img class="outcome_image" src="url">
            <p class="outcome_number">YY</p>
            <p class="outcome_description">XXXXXX</p>
        </div>
       
    </div>  
</section>


<!-- SEÇÃO CASES -->
<section class="cases">
    <h1 class="title_sections">Cases de Sucesso</h1>




     
    <div class="slideshow-container">
            <?php
            $args = array( 'posts_per_page' => 4,
            'category_name' => 'cases' );




            $cpt_query = new WP_Query($args);




            if ($cpt_query -> have_posts()) :
                while ($cpt_query -> have_posts()) : $cpt_query -> the_post();?>
                    <div class="slides fade">
                        <div class="case_description"> <i>"<?php echo the_field('descricao_case'); ?> "</i></div>
                        <div class="case_name_img">
                        <img class="case_img" src="<?php echo the_field('imagem_cliente'); ?>">
                            <div class="case_name"> <?php echo the_field('nome_cliente'); ?> </div>
                           
                        </div>
                    </div>    
            <?php endwhile;
            endif;
            ?>




        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
         <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
   
    <br>




    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    </div>




</section>




<!-- SEÇAO APOIADORES -->
<section class="supporters">
    <h1 class="title_sections">Apoiadores</h1>


   
</section>








</div>


<?php
get_footer();
?>




