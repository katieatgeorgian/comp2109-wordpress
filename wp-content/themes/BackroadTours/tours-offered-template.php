<!-- archive page -->

<?php 
    /** 
     * Template Name: Tours Offered
     * Template Post Type: post, page, product
     */

    get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section class="the-page-content">
            <h1  class="offered-tours-h1 mt-5 mb-5"> <?php echo esc_html(get_the_title()); ?></h1>
            <?php
                $query = new WP_Query(array('post_type' => "tours_offered", "post_per_page" => 10, "orderby" => "menu_order"));
                while ($query->have_posts() ) : $query->the_post(); ?>
                    <div><h3><?php the_title(); ?></h3></div>
                    <div class="tours mb-3">
                        <?php 
                            the_post_thumbnail();
                        ?>                       
                    </div>
                    <div class="place mb-5"><?php the_content(); ?> </div>
                    
                   
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
        </section>
    </main>
</div>

<?php
    get_footer();
?>