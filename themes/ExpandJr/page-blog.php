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

        $allPostsWPQuery = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 3, 'paged' => $paged));
        if ($allPostsWPQuery->have_posts()) : while ($allPostsWPQuery->have_posts()) : $allPostsWPQuery->the_post();
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
            <?php endwhile; ?>
            <div class='pagination'>

                <?= paginate_links(array(
                    'total' => $allPostsWPQuery->max_num_pages
                )); ?>

            </div>
    </div>
    <div></div>
</section>

<?php endif; ?>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>