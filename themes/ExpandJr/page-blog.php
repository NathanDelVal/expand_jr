<?php get_header(); ?>

<div class='banner'>
    <div>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
    </div>
</div>
<br>
<br>

<section>

    <div>

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        if (isset($_GET)) {
            $categories = [];
            foreach ($_GET as $key => $value) {
                if (strpos($key, 'categoria') !== false) {
                    array_push($categories, $value);
                };
            }

            $categories = new WP_Query(array(
                'post_type' => 'post', 
                'post_status' => 'publish', 
                'posts_per_page' => 3, 
                'paged' => $paged,
                'category__in' => $categories,
            ));

        //  echo '<pre>';
        //  print_r($categories->posts);
        //  echo '</pre>';
        } else {
            $categories = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 3, 'paged' => $paged));
        };

        if ($categories->have_posts()) {
            while ($categories->have_posts()) {
                $categories->the_post();
                if(isset($_GET['busca_titulo'])) {
                    if(strpos(get_the_title(), $_GET['busca_titulo']) === false) {
                        continue;
                    } 
                }
        ?>
                <div class='blog-card'>

                    <img src="" alt="placeholder">

                    <div>
                        <div>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_category(','); ?></p>
                        </div>
                        <p><?php the_content(); ?></p>
                        <button>Read More</button>
                    </div>
                </div>
                <br>
            <?php }; ?>
            <div class='pagination'>

                <?= paginate_links(array(
                    'total' => $categories->max_num_pages
                )); ?>

            </div>
    </div>
    <form action="" method='get' name='busca_blog' id='busca_blog' style='display:flex;flex-direction:column;gap:20px'>
        <input type="text" name='busca_titulo' class='busca' placeholder='busca' style='border:1px solid black;padding:5px'>
        <ul style='display:flex;flex-direction:column;gap:10px;align-items:start'>
            <?php
            $counter = 0;
            foreach (get_categories() as $x) {
                echo "<li>" . $x->name . " <input type='checkbox' value='" . $x->cat_ID . "' name='categoria" . ++$counter . "'></li>";
            }
            ?>
        </ul>
        <input type="submit" value="BUSCAR" style="padding: 10px;background:black;color:white;width:min-content">
    </form>
</section>

<?php  }; ?>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>