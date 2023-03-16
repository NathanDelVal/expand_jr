<?php
// Criando Query

/* Posts mais populares */
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
);
$popular = new WP_Query($args);

/* Posts mais recentes */
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
);
$recents = new WP_Query($args);
?>

<footer>
    <div class="principal">
        <div class="frames">
            <div class="frame a">
                <p class="flashyText">Postagens Populares</p>
                <div class="frame b">
                    <?php
                    if( $popular->have_posts() ) {
                        while( $popular->have_posts() ) {
                            $popular->the_post();
                            ?>
                            <a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="frame a">
                <p class="flashyText">Postagens Recentes</p>
                <div class="frame b">
                    <?php
                    if( $recents->have_posts() ) {
                        while( $recents->have_posts() ) {
                            $recents->the_post();
                            ?>
                            <a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="frame a">
                <p class="flashyText">Links</p>
                <div>
                    <?php
                    wp_nav_menu(['menu' => 'links']);
                    ?>
                </div>
            </div>
        </div>
        <div class="frames">
            <div class="frame bot c">
                <?php the_custom_logo(); ?>
                <p>CNPJ: 11.111.111/0000-00</p>
            </div>
            <div class="frame bot newsletter">
                <p>Cadastre-se em nossa newsletter!</p>
                <input class="emailInput" type="email" name="email" placeholder="Digite seu e-mail">
                <div>
                    <input class="checkbox" type="checkbox" name="agree" id="agree">
                    <label for="agree">Li e aceito as politicas de privacidade e termos de uso</label>
                </div>
                <div class="a">
                    <button type="submit">Cadastrar</button>
                </div>
            </div>
            <div class="frame bot" id="end">
                <div>
                    <p>Av. Exemplo, 111 - Niterói, Rio de Janeiro</p>
                    <p>Telefone: (21) 99999-9999</p>
                </div>
                <div class="social">
                    <?php
                    wp_nav_menu(['menu' => 'social-media']);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright ⒸExpand JR 2023</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>