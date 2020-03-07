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
        <?php $masthead_background = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
            <div class="mb-5" style="background-image: url(<?php echo $masthead_background['0']; ?>); height: 400px; background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: center center">
                <h1  class="offered-tours-h1 pt-5"> <?php echo esc_html(get_the_title()); ?></h1>
            </div>
            <?php
                $query = new WP_Query(array('post_type' => "tours_offered", "post_per_page" => 10, "orderby" => "menu_order"));
                while ($query->have_posts() ) : $query->the_post(); ?>
                    <h3 class="mt-5"><?php the_title(); ?></h3>
                    <div class="row tours mb-3 justify-content-center">
                        <div class="col-xs-0 col-md-3"></div>
                        <div class="col-xs-12 col-md-3">
                            <?php 
                                the_post_thumbnail();
                            ?> 
                        </div>    
                        <div class="place mb-5 col-xs-12 col-md-3"><?php the_content(); ?> </div>
                        <div class="col-xs-0 col-md-3"></div>                 
                    </div>
                    
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
                <a href="contact"><button class="tours-offered-btn p-3">Book/Contact</button></a>
                <p class="mt-3"><small>For more details, please visit our <span><a href="#">Tours</a><span> page.</small></p>
        </section>

    </main>
</div>

<?php
    get_footer();
?>