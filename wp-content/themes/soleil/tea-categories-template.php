<!-- archive page -->

<?php 
    /** 
     * Template Name: Tea Categories
     * Template Post Type: post, page, product
     */

    get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section class="the-page-content">
        <?php $masthead_background = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
            <div class="mb-5" style="background-image: url('http://localhost/wordpress/wp-content/uploads/2020/04/milk-in-tea.jpg'); height: 500px; background-repeat: no-repeat; background-size: cover; background-position: center center">
            </div>
            <h1 class="pt-5 teas-page"> <?php echo esc_html(get_the_title()); ?></h1>
            <?php
                $query = new WP_Query(array('post_type' => "tea_categories", "post_per_page" => 10, "orderby" => "menu_order"));
                while ($query->have_posts() ) : $query->the_post(); ?>
                    <h3 class="mt-5"><?php the_title(); ?></h3>
                    <div class="row tours mb-3 justify-content-center">
            
                        <div class="col-xs-12 col-md-3">
                            <?php 
                                the_post_thumbnail();
                            ?> 
                        </div>    
                        <div class="types pt-5 mb-5 col-xs-12 col-md-3"><?php the_content(); ?> </div>
             
                    </div>
                    
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
                <a href="/wordpress/shop"><button class="teas-btn p-3">View Store</button></a>
                <p class="mt-3"><small>For more details, please <span><a href="/wordpress/soleil/contact">Contact</a><span> us.</small></p>
        </section>

    </main>
</div>

<?php
    get_footer('post');
?>