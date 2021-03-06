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
    
    <!-- let's use the featured image for the masthead image -->
    <?php $masthead_background = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?> <!-- grabs image (not yet displaying). how wp stores feature images, attachment to page so what getting -- full is full sized 100% width, height auto-->
    <section class="masthead" style="background-image: url(<?php echo $masthead_background['0']; ?>);"> <!-- display image -->
        <article>
            <h1><?php echo esc_html( get_the_title() ); ?></h1><!-- use title of page to display title of page - looks at url of page, looks for page title and spits it out -->
        </article>
    </section>
    <section class="the-page-content"><!-- class styling on own -->
        <?php 
            //Start the loop to get the pages content
            while(have_posts()) : the_post(); //have_posts is unique for wp
        ?>
        <!-- Note that the_content() works only inside a WP loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- hook takes everything off page and spit out -->
        </div>
        <?php 
            endwhile; //ends the loop
            wp_reset_query();//resetting the page query
        ?>
    </section> 
    <section class="display-posts"> <!-- display the posts -->
        <!-- define our WP query parameters -->
        <?php $the_query = new WP_Query('posts_per_page=5'); ?>
        <!-- start our WP query -->
        <?php while($the_query -> have_posts()) : $the_query -> the_post(); 
        ?> <!-- while query variable has posts going to spit out content -->

        <!-- displays the Post Title with Hyperlink -->
        <li>
            <a href="<?php the_permalink() ?>"> <!-- WP php hook to grab url of item -->
                <div><?php the_title(); ?></div>
                <!-- featured image -->
                <div><?php the_post_thumbnail(); ?></div> <!-- grab image in whatever default settings it has -->
                <!-- display the post excerpt -->
                <div><?php the_excerpt(__('(more..)')); ?></div> <!-- in functions there is a function - add "more" -->
            </a>
        </li>
        
        <!-- repeat the process and reset once it hits the limit - defined limit (no more than 5) and then kill it -->
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </section>
    <section class="shortcode-example">
        <div>
            <?php echo do_shortcode("[movie_shortcode]"); ?>
        </div>

    </section>
    </main>
</div>