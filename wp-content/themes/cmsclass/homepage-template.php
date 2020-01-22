<?php
/**
 * Template Name: Homepage Template;
 * The front page template file
 * 
 **/
get_header(); //hook
/** require 'header.php' -alternative to get_header*/
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        //     if( have_posts() ) {
        //         //load posts loop
        //         while ( have_posts() ) {
        //             the_post();
        //             get_template_part( 'template-parts/content/content' );
        //         }
        //         //previous/next page navigation.
        //         twentynineteen_the_posts_navigation();//keep twentynineteen even though custom template
        //     } else {
        //         //if no content, include the no posts found template.
        //         get_template_part( 'template-parts/content/content', 'none');//looks for content-none.php file
        //     }
        // 
        
        ?>
        <!-- Add content using custom advanced fields -->
        <section class="masthead" style="background-image: url(<?php the_field('masthead_image'); ?>); height: 300px">
            <article>
                <h1><?php the_field('page_title'); ?></h1>
            </article>
        </section>

    </main>
</div>