<?php
/**
 * Template Name: Jewelry Home Page Template;
 * The front page template file
 * 
 **/
get_header(); //hook
/** require 'header.php' -alternative to get_header*/
?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    
    <!-- let's use the featured image for the masthead image -->
    <section class="masthead mb-5 row" style="background-image: url(<?php the_field('masthead_image'); ?>); height: 500px; background-repeat: no-repeat; background-size: cover;"> <!-- display image -->
        <article class="col-12">
            <h1><?php echo esc_html( get_the_title() ); ?></h1><!-- use title of page to display title of page - looks at url of page, looks for page title and spits it out -->
            <h2 class="p-4 pt-5 mt-0"><?php the_field('masthead_phrase') ?> </h2>
            <p><?php echo $masthead_background ?></p>
            <button class="m-5"><a href="#"><?php the_field('masthead_button') ?></a>
        </article>
    </section>
    
    <section class="category1 mx-auto mb-5 row" style="background-image: url(<?php the_field('category1_image'); ?>); height: 400px; width: 80%; background-repeat: no-repeat; background-size: cover;">
        <div class="category1Div ml-3 text-center col-12">
            <h3 class="pt-4 font-weight-bold">Shop <?php the_field('category1_name'); ?></h3>
            <button>See our Collection</button>
        </div>
    </section>
    <section class="category2 mx-auto mb-5 row" style="background-image: url(<?php the_field('category2_image'); ?>); height: 400px; width: 80%; background-repeat: no-repeat; background-size: cover;">
        <div class="category2Div ml-3 text-center col-12">
            <h3 class="pt-4 font-weight-bold">Shop <?php the_field('category2_name'); ?></h3>
            <a href="#"><button>See our Collection</button></a>
        </div>
    </section>
    <section class="category3 mx-auto mb-5 row" style="background-image: url(<?php the_field('category3_image'); ?>); height: 400px; width: 80%; background-repeat: no-repeat; background-size: cover;">
        <div class="category3Div ml-3 text-center col-12">
            <h3 class="pt-4 font-weight-bold">Shop <?php the_field('category3_name'); ?></h3>
            <button>See our Collection</button>
        </div>
    </section>

    <section class="blogPosts"> <!-- display the posts -->
        <!-- define our WP query parameters -->
        <?php $the_query = new WP_Query('posts_per_page=5'); ?>
        <!-- start our WP query -->
        <h4 class="text-center pb-3">Blog Posts</h4>
        <?php while($the_query -> have_posts()) : $the_query -> the_post(); 
        ?> <!-- while query variable has posts going to spit out content -->
        <!-- displays the Post Title with Hyperlink -->
        <li class="d-flex justify-content-center">
            
                <!-- featured image -->
                <div class="thumbnail mr-3"><?php the_post_thumbnail(); ?></div> <!-- grab image in whatever default settings it has -->
                <!-- display the post excerpt -->
                <div class="blogPost">
                    <a href="<?php the_permalink() ?>"> <!-- WP php hook to grab url of item --><?php the_title(); ?>
                    <?php the_excerpt(_('(more..)')); ?></a> <!-- in functions there is a function - add "more" -->
                    
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