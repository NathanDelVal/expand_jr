<?php
get_header();
?>

<main class="contato_main">

    <section class="contato_welcome">
        <div class="contato_welcome_container">
            <h1 class="contato_title">Contatos</h1>
            <p class="contato_welcome_text">Fale conosco e peça seu diagnóstico gratuito!</p>
        </div>

    </section>

    <section class="contato_jornada">
        <h2 class="contato_jornada_title">Nossa Jornada do Cliente</h2>
        <div class="contato_jornada_container">
            <div class="contato_jornada_container_stage">
                <h3 class="contato_jornada_container_stage_title">Primeiro Contato</h3>
                <div class="contato_jornada_container_stage_path">
                    <div class="traco" id="traco_hide1"></div>
                    <div class="contato_jornada_container_stage_circle">
                        <div class="contato_jornada_container_stage_intern_circle" id="jornada_circle1"></div>
                    </div>
                    <div class="traco"></div>
                </div>
            </div>

            <div class="contato_jornada_container_stage">
                <h3 class="contato_jornada_container_stage_title">Diagnóstico</h3>
                <div class="contato_jornada_container_stage_path">
                    <div class="traco"></div>
                    <div class="contato_jornada_container_stage_circle">
                        <div class="contato_jornada_container_stage_intern_circle" id="jornada_circle2"></div>
                    </div>
                    <div class="traco"></div>
                </div>
            </div>

            <div class="contato_jornada_container_stage">
                <h3 class="contato_jornada_container_stage_title">Negociação</h3>
                <div class="contato_jornada_container_stage_path">
                    <div class="traco"></div>
                    <div class="contato_jornada_container_stage_circle">
                        <div class="contato_jornada_container_stage_intern_circle" id="jornada_circle3"></div>
                    </div>
                    <div class="traco"></div>
                </div>
            </div>

            <div class="contato_jornada_container_stage">
                <h3 class="contato_jornada_container_stage_title">Início do projeto</h3>
                <div class="contato_jornada_container_stage_path">
                    <div class="traco"></div>
                    <div class="contato_jornada_container_stage_circle">
                        <div class="contato_jornada_container_stage_intern_circle" id="jornada_circle4"></div>
                    </div>
                    <div class="traco" id="traco_hide2"></div>
                </div>
            </div>

        </div>

        <div class="contato_jornada_paragraph">
            <p id="paragraph1" class="paragraph1_hide">Primeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro Contato <br>Primeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro ContatoPrimeiro Contato</p>
            <p id="paragraph2" class="paragraph2_hide">Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico <br>Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico Diagnóstico</p>
            <p id="paragraph3" class="paragraph3_hide"> <br>Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação Negociação </p>
            <p id="paragraph4" class="paragraph4_hide">Início do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projeto <br>Início do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projetoInício do projeto</p>
        </div>
    </section>
    <section class="contato_info_form">

        <?php 
            $informacao_contato_telefone = get_option('ej_contatos_tel');
            $informacao_contato_email = get_option('ej_contatos_email');
            $informacao_contato_endereco = get_option('ej_contatos_endereco') . ', ' . get_option('ej_contatos_numero') . ' - ' . get_option('ej_contatos_complemento') . ' - ' . get_option('ej_contatos_bairro') . ', ' . get_option('ej_contatos_cidade');
            $informacao_contato_email_form = get_option('ej_contatos_email_form');
        ?>

        <section class="contato_info">
            <h2>Informações de contato</h2>
            <div class="contato_info_list">
                <div class="contato_info_list_item" id="contato_info_item_1"><img src="<?php echo IMAGES_DIR . '/info_tel.png'; ?>" alt=""><?php echo $informacao_contato_telefone; ?></div>

                <div class="contato_info_list_item" id="contato_info_item_2"><img src="<?php echo IMAGES_DIR . '/info_email.png'; ?>" alt=""><?php echo $informacao_contato_email; ?></div>

                <div class="contato_info_list_item" id="contato_info_item_3"><img src="<?php echo IMAGES_DIR . '/info_local.png'; ?>" alt=""><?php echo $informacao_contato_endereco; ?></div>
            </div>
            <iframe width="400" height="300" id="contato_info_mapa" src="https://maps.google.com/maps?q=<?php echo $informacao_contato_endereco; ?>&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </section>

        <section class="contato_formulario">
                <h3 class="contato_formulario_title">Formulário de Contato</h3>
                <form action="mailto:<?php echo $informacao_contato_email_form; ?>" method="post" class="contato_formulario_form">
                    <label for="contato_input_nome">Nome:</label>
                    <input type="text" id="contato_input_nome" name="contato_input_nome">
                    <label for="contato_input_tel">Telefone:</label>
                    <input type="tel" id="contato_input_tel" name="contato_input_tel">
                    <label for="contato_input_email">e-Mail:</label>
                    <input type="email" id="contato_input_email" name="contato_input_email">
                    <label for="contato_input_cidade">Cidade:</label>
                    <input type="text" id="contato_input_cidade" name="contato_input_cidade">
                    <label for="contato_input_necessidade">Qual a sua principal necessidade?</label>
                    <input type="text" id="contato_input_necessidade" name="contato_input_necessidade">
                    <label for="form_contato_services">Algum dos nossos serviços te desperta mais interesse? </label>
                    <div class="multiselect">
                        <div class="selectBox" onclick="showCheckboxes()">
                            <select id="form_contato_services">
                                <option value="">-- Selecione uma ou mais opções --</option>
                            </select>
                            <div class="overSelect"></div>
                        </div>
                        <div id="checkboxes">
                            <label for="one">
                                <input type="checkbox" id="dupla_cid" /> Dupla Cidadania Portuguesa</label>
                            <label for="two">
                                <input type="checkbox" id="assessoria_passaporte" /> Assessoria para Emissão de Passaporte Brasileiro</label>
                            <label for="three">
                                <input type="checkbox" id="analise_bur" /> Análise Burocrática</label>
                                <label for="one">
                                <input type="checkbox" id="estudo_merc" /> Estudo e Análise de Mercado</label>
                            <label for="two">
                                <input type="checkbox" id="planejamento_log" /> Planejamento Logístico</label>
                            <label for="three">
                                <input type="checkbox" id="prospeccao_inter" /> Prospecção Internacional</label>
                        </div>
                    </div>
                    <label for="contato_form_como-chegou">Como chegou até nós?</label>
                    <select name="como-chegou" id="contato_form_como-chegou">
                        <option value="">--Selecione uma opção--</option>
                        <option value="internet">Pesquisando na internet</option>
                        <option value="instagram">Instagram</option>
                        <option value="linkedin">Linkedin</option>
                        <option value="indicado">Me indicaram vocês</option>
                        <option value="eventos">Evento</option>
                        <option value="recebi-email">Recebi um email de vocês</option>
                        <option value="outros">Outros</option>
                    </select>
                    <div class="contato_formulario_form_button">
                        <button type="submit">Enviar</button>
                    </div>
                    
                </form>
        </section>
    </section>
</main>









<?php
get_footer();
?>