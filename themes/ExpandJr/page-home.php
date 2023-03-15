<?php
get_header();
?>


<div class="homepage_main">
<!-- SEÇAO SEJA BEM VINDO -->
<section class="welcome">
    <div class="wlc_content">
        <h1 class="title">Expanda seus horizontes</h1>
        <h2 id="wlc_desc">através das nossas soluções internacionais de alto impacto.</h2>
        <button class="welcome_btn"><a class="welcomebtn_text flashyText" href="<?php bloginfo('url');?>/contato/">Fale com um especialista</a></button>
    </div>
</section>


<!--SEÇAO SERVIÇOS-->
<section class="section_services">
    <div id="fade" class="modal_hide">
        <div id="modal" class="modal_hide">
            <div id="modal_header">
                <div id="space_empty"></div>
                <div id="modal_image_box">
                    <img src="" alt="" id="modal_image">
                </div>
                <button id="modal_close">X</button>
            </div>
            <div id="modal_content">
                <div id="modal_title"></div>
                <p id="modal_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam cum in accusamus tenetur, dolorum ipsum asperiores atque dolor ab tempora eaque soluta non ea rem illum quam nobis porro Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas vitae inventore nesciunt praesentium velit fugiat quasi assumenda, quos unde quibusdam illo quaerat nam fuga expedita. Exercitationem assumenda perferendis esse nam.</p>
            </div>
            <button id="modal_button"> <a href="/">Diagnóstico Gratuito</a></button>

        </div>
    </div>
    <h1 class="title_sections">Nossos Serviços</h1>
    <div class="section_services_container">        
            <!--SUBSEÇAO PESSOA FÍSICA-->
            <section class="section_services_container_LP">
                <div class="section_services_container_LP_content">
                    <h1 class="title_sections"> Para Você </h1>


                    <div class="section_services_container_LP_content_services">
                        <div class="section_services_container_LP_content_services_type">
                            <div class="LP_service_type_image_box">
                                <img class="LP_service_type_image">
                            </div>
                            <p class="service_type_description" id="LP_1">  Dupla Cidadania Portuguesa </p>
                        </div>

                        <div class="section_services_container_LP_content_services_type">
                            <div class="LP_service_type_image_box">
                                <img class="LP_service_type_image">
                            </div>
                            <p class="service_type_description" id="LP_2"> Assessoria para Emissão de Passaporte Brasileiro </p>
                        </div>
                    </div>
                </div>        
            </section>

             <div class="section_services_dividing_line">    
             </div>

            <!--SUBSEÇAO PESSOA JURIDICA-->
            <section class="section_services_container_LE">
                <div class="section_services_container_LE_content" >
                    <h1 class="title_sections"> Para Sua Empresa </h1>


                    <div class="section_services_container_LE_content_services">
                        <div class="section_services_container_LE_content_services_1">
                            <div class="section_services_container_LE_content_services_type">
                                <div class="LE_service_type_image_box">
                                    <img class="LE_service_type_image">
                                </div>
                                <p class="service_type_description" id="LE_1"> Análise Burocrática </p>
                            </div>

                            <div class="section_services_container_LE_content_services_type">
                                <div class="LE_service_type_image_box">
                                    <img class="LE_service_type_image">
                                </div>
                                <p class="service_type_description" id="LE_2"> Estudo e Análise do Mercado </p>
                            </div>
                        </div>

                        <div class="section_services_container_LE_content_services_2">
                            <div class="section_services_container_LE_content_services_type">
                                <div class="LE_service_type_image_box">
                                    <img class="LE_service_type_image">
                                </div>
                                <p class="service_type_description" id="LE_3"> Planejamento Logístico </p>
                            </div>

                            <div class="section_services_container_LE_content_services_type">
                                <div class="LE_service_type_image_box">
                                    <img class="LE_service_type_image">
                                </div>
                                <p class="service_type_description" id="LE_4"> Prospecção Internacional </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
</section>
   
<!--SEÇAO RESULTADOS-->
<section class="outcomes">
    <p class="subtitle">Resultados</p>
    <div class="outcomes_numbers">
        <div class="outcome">
            <img class="outcome_image" src="">
            <div class="counter title" data-goal="100">0</div>
            <p class="outcome_description">XXXXXX</p>
        </div>
        <div class="outcome">
            <img class="outcome_image" src="/">
            <div class="counter title" data-goal="100">0</div>
            <p class="outcome_description">XXXXXX</p>
        </div>
        <div class="outcome">
            <img class="outcome_image" src="/">
            <div class="counter title" data-goal="100">0</div>
            <p class="outcome_description">XXXXXX</p>
        </div>
        <div class="outcome">
            <img class="outcome_image" src="/">
            <div class="counter title" data-goal="100">0</div>
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




