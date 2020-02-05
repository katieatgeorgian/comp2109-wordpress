<?php
/**
 * Template Name: Jewelry Template;
 * The front page template file
 * 
 **/
get_header(); //hook
/** require 'header.php' -alternative to get_header*/
?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    
    <!-- let's use the featured image for the masthead image -->
    <section class="masthead mb-5" style="background-image: url(<?php the_field('masthead_image'); ?>); height: 500px; background-repeat: no-repeat; background-size: cover;"> <!-- display image -->
        <article>
            <h1><?php echo esc_html( get_the_title() ); ?></h1><!-- use title of page to display title of page - looks at url of page, looks for page title and spits it out -->
            <h2 class="p-4 mt-0"><?php the_field('masthead_phrase') ?> </h2>
            <p><?php echo $masthead_background ?></p>
            <button class="m-5"><a href="#"><?php the_field('masthead_button') ?></a>
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
    <section > <!-- display the posts -->
        <!-- define our WP query parameters -->
        <?php $the_query = new WP_Query('posts_per_page=5'); ?>
        <!-- start our WP query -->
        <?php while($the_query -> have_posts()) : $the_query -> the_post(); 
        ?> <!-- while query variable has posts going to spit out content -->

        <!-- displays the Post Title with Hyperlink -->
        <li class="d-flex justify-content-center">
            
                <!-- featured image -->
                <div class="thumbnail"><?php the_post_thumbnail(); ?></div> <!-- grab image in whatever default settings it has -->
                <!-- display the post excerpt -->
                <div>
                    <div><?php the_excerpt(_('(more..)')); ?></div> <!-- in functions there is a function - add "more" -->
                    <button><a class="d-flex" href="<?php the_permalink() ?>"> <!-- WP php hook to grab url of item --><?php the_title(); ?></a></button>
                </div>
            
        </li>
        <div class="d-flex justify-content-center mt-4 mb-4">
            <div class="divider"></div>
        </div>
        <!-- repeat the process and reset once it hits the limit - defined limit (no more than 5) and then kill it -->
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </section>


    </main>
</div>

<?php
    get_footer();
?>