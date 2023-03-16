<?php 

//registra novo menu
add_action('admin_menu', 'edita_contato_menu');

function edita_contato_menu(){
    add_menu_page(
        'Editar Contatos',
        'Editar Contatos',
        'manage_options',
        'ej-contatos',
        'ej_contatos_menu_pagina',
        'dashicons-phone',
        50
    );
}

//Renderiza a página do menu
function ej_contatos_menu_pagina(){
    ?>
        <div>
            <h1>Editar Informações de Contato</h1>
            <form action="options.php" method="post">
                <?php
                    settings_errors();
                    settings_fields('ej_contatos_settings');
                    do_settings_sections('ej-contatos');
                    submit_button();
                ?>

            </form>
        </div>
    <?php 
}



//Configura a nova seção
add_action('admin_menu', 'ej_contatos_secao');

function ej_contatos_secao(){
    //seção
    add_settings_section(
        'ej_contatos_secao',
        'Painel de edição das informações de contato e localização da empresa',
        'ej_contatos_campos_secao_detalhes',
        'ej-contatos',
        'ej_contatos_secao'
    );

    //-----------------------Criação dos campos---------------------------------------
    ////Endereço
    add_settings_field(
        'ej_contatos_endereco',
        'Endereço:',
        'ej_contatos_endereco',
        'ej-contatos',
        'ej_contatos_secao'
    );

    register_setting(
        'ej_contatos_settings',
        'ej_contatos_endereco',
        //Cria função de callback para validação dos dados no backend
        'verifica_endereco'
    );

    ////Número
    add_settings_field(
        'ej_contatos_numero',
        'Número:',
        'ej_contatos_numero',
        'ej-contatos',
        'ej_contatos_secao'
    );

    register_setting(
        'ej_contatos_settings',
        'ej_contatos_numero',
        //Cria função de callback para validação dos dados no backend
        'verifica_numero'
    );

    ////Complemento
    add_settings_field(
        'ej_contatos_complemento',
        'Complemento:',
        'ej_contatos_complemento',
        'ej-contatos',
        'ej_contatos_secao'
    );

    register_setting(
        'ej_contatos_settings',
        'ej_contatos_complemento',
        //Cria função de callback para validação dos dados no backend
        'verifica_complemento'
    );

    ////Cidade
    add_settings_field(
        'ej_contatos_cidade',
        'Cidade:',
        'ej_contatos_cidade',
        'ej-contatos',
        'ej_contatos_secao'
    );

    register_setting(
        'ej_contatos_settings',
        'ej_contatos_cidade',
        //Cria função de callback para validação dos dados no backend
        'verifica_cidade'
    );

    ////Bairro
    add_settings_field(
        'ej_contatos_bairro',
        'Bairro:',
        'ej_contatos_bairro',
        'ej-contatos',
        'ej_contatos_secao'
    );

    register_setting(
        'ej_contatos_settings',
        'ej_contatos_bairro',
        //Cria função de callback para validação dos dados no backend
        'verifica_bairro'
    );

    ////Telefone
    add_settings_field(
        'ej_contatos_tel',
        'Telefone:',
        'ej_contatos_tel',
        'ej-contatos',
        'ej_contatos_secao'
    );

    register_setting(
        'ej_contatos_settings',
        'ej_contatos_tel',
        //Cria função de callback para validação dos dados no backend
        'verifica_tel'
    );

    ////e-Mail
    add_settings_field(
        'ej_contatos_email',
        'e-Mail:',
        'ej_contatos_email',
        'ej-contatos',
        'ej_contatos_secao'
    );

    register_setting(
        'ej_contatos_settings',
        'ej_contatos_email',
        //Cria função de callback para validação dos dados no backend
        'verifica_email'
    );

    ////e-Mail Form
    add_settings_field(
        'ej_contatos_email_form',
        'e-Mail destino do form:',
        'ej_contatos_email_form',
        'ej-contatos',
        'ej_contatos_secao'
    );

    register_setting(
        'ej_contatos_settings',
        'ej_contatos_email_form',
        //Cria função de callback para validação dos dados no backend
        'verifica_email_form'
    );
}

//------------------------renderização--------------------------------------------

//Renderiza a Seção
function ej_contatos_campos_secao_detalhes(){
    ?>
       <p>Insira os dados que deseja editar:</p> 
    <?php
}



//Renderiza o endereço
function ej_contatos_endereco(){
    ?>
        <input type="text"
        name="ej_contatos_endereco"
        id="ej_contatos_endereco"
        value="<?php echo esc_attr(get_option('ej_contatos_endereco')); ?>"
        required>
    <?php 
}


//Renderiza o número
function ej_contatos_numero(){
    ?>
        <input type="text"
        name="ej_contatos_numero"
        id="ej_contatos_numero"
        value="<?php echo esc_attr(get_option('ej_contatos_numero')); ?>"
        required>
    <?php 
}


//Renderiza o complemento
function ej_contatos_complemento(){
    ?>
        <input type="text"
        name="ej_contatos_complemento"
        id="ej_contatos_complemento"
        value="<?php echo esc_attr(get_option('ej_contatos_complemento')); ?>"
        required>
    <?php 
}


//Renderiza a cidade
function ej_contatos_cidade(){
    ?>
        <input type="text"
        name="ej_contatos_cidade"
        id="ej_contatos_cidade"
        value="<?php echo esc_attr(get_option('ej_contatos_cidade')); ?>"
        required>
    <?php 
}


//Renderiza o bairro
function ej_contatos_bairro(){
    ?>
        <input type="text"
        name="ej_contatos_bairro"
        id="ej_contatos_bairro"
        value="<?php echo esc_attr(get_option('ej_contatos_bairro')); ?>"
        required>
    <?php 
}


//Renderiza o telefone
function ej_contatos_tel(){
    ?>
        <input type="text"
        name="ej_contatos_tel"
        id="ej_contatos_tel"
        value="<?php echo esc_attr(get_option('ej_contatos_tel')); ?>"
        required>
    <?php 
}



//Renderiza o e-Mail
function ej_contatos_email(){
    ?>
        <input type="text"
        name="ej_contatos_email"
        id="ej_contatos_email"
        value="<?php echo esc_attr(get_option('ej_contatos_email')); ?>"
        required>
    <?php 
}



//Renderiza o e-Mail do form
function ej_contatos_email_form(){
    ?>
        <input type="text"
        name="ej_contatos_email_form"
        id="ej_contatos_email_form"
        value="<?php echo esc_attr(get_option('ej_contatos_email_form')); ?>"
        required>
    <?php 
}



//----------Validação dos campos--------------------
//Endereço
function verifica_endereco($endereco){
    if(empty($endereco)){
        $endereco = get_option('ej_contatos_endereco');
        add_settings_error(
            'ej_contatos_mensagem_de_erro',
            'ej_contatos_erro_endereco',
            'O campo Endereço não pode ficar vazio',
            'error'
        );
    }
    return $endereco;
}


//Número
function verifica_numero($numero){
    if(empty($numero)){
        $numero = get_option('ej_contatos_numero');
        add_settings_error(
            'ej_contatos_mensagem_de_erro',
            'ej_contatos_erro_numero',
            'O campo Número não pode ficar vazio',
            'error'
        );
    }
    return $numero;
}


//Complemento
function verifica_complemento($complemento){
    if(empty($complemento)){
        $complemento = get_option('ej_contatos_complemento');
        add_settings_error(
            'ej_contatos_mensagem_de_erro',
            'ej_contatos_erro_complemento',
            'O campo Complemento não pode ficar vazio',
            'error'
        );
    }
    return $complemento;
}


//Cidade
function verifica_cidade($cidade){
    if(empty($cidade)){
        $cidade = get_option('ej_contatos_cidade');
        add_settings_error(
            'ej_contatos_mensagem_de_erro',
            'ej_contatos_erro_cidade',
            'O campo Cidade não pode ficar vazio',
            'error'
        );
    }
    return $cidade;
}



//Bairro
function verifica_bairro($bairro){
    if(empty($bairro)){
        $bairro = get_option('ej_contatos_bairro');
        add_settings_error(
            'ej_contatos_mensagem_de_erro',
            'ej_contatos_erro_bairro',
            'O campo Bairro não pode ficar vazio',
            'error'
        );
    }
    return $bairro;
}



//Telefone
function verifica_tel($tel){
    if(empty($tel)){
        $tel = get_option('ej_contatos_tel');
        add_settings_error(
            'ej_contatos_mensagem_de_erro',
            'ej_contatos_erro_tel',
            'O campo Telefone não pode ficar vazio',
            'error'
        );
    }
    return $tel;
}


//e-Mail
function verifica_email($email){
    if(empty($email)){
        $email = get_option('ej_contatos_email');
        add_settings_error(
            'ej_contatos_mensagem_de_erro',
            'ej_contatos_erro_email',
            'O campo e-Mail não pode ficar vazio',
            'error'
        );
    }
    return $email;
}



//e-Mail Form
function verifica_email_form($email_form){
    if(empty($email_form)){
        $email_form = get_option('ej_contatos_email_form');
        add_settings_error(
            'ej_contatos_mensagem_de_erro',
            'ej_contatos_erro_email_form',
            'O campo e-Mail destino do form não pode ficar vazio',
            'error'
        );
    }
    return $email_form;
}
?> 
 