<?php get_header(); ?>

<div style="background:gray;height:300px;display:flex;flex-direction:column;align-items:center;justify-content:center;color: white;text-align:center">
    <div>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
    </div>
</div>
<br>
<br>

<section style='display:grid;grid-template:auto / 3fr 1fr;align-items:center;gap:20px;padding:0 5%'>

    <div>

        <?php

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $allPostsWPQuery = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 3, 'paged' => $paged));
        if ($allPostsWPQuery->have_posts()) : while ($allPostsWPQuery->have_posts()) : $allPostsWPQuery->the_post();
        ?>
                <div style='display:grid;align-items:center;gap:20px;grid-template: auto / 1fr 1fr;width:100%;min-height:300px'>

                    <img src="" style="width:100%;height:100%;background:gray" alt="placeholder">

                    <div style="height:100%;display:flex;justify-content:space-between;flex-direction:column">
                        <div>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_category(','); ?></p>
                        </div>
                        <p><?php the_content(); ?></p>
                        <button style='width:max-content;background:gray;color:white;border:none;padding:5px 10px'>Read More</button>
                    </div>
                </div>
                <br>
            <?php endwhile; ?>
            <div style='display:flex;justify-content:space-between;align-items:center;width:20%'>

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