<?php
/**
 * Template Name: Soleil - Home;
 * Description: template for the home page - navigation, masthead with title CTA, followed by a block of text, a gallery of sorts (custom post type), a two-column section, a section (with triangle cutout) perfect for quotes, and finally the latest blog posts, before ending with a footer.
 * The home page template file
 * 
 **/
get_header(); //hook
/** require 'header.php' -alternative to get_header*/
?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    
    <!-- let's use the featured image for the masthead image -->
    <section class="masthead row" style="background-image: url(<?php the_field('masthead_image'); ?>); height: 500px; background-repeat: no-repeat; background-size: cover; background-position: bottom center"> <!-- display image -->
        <article class="col-12 mastheadGrid">
            <h1><?php the_field('page_title'); ?></h1><!-- use title of page to display title of page - looks at url of page, looks for page title and spits it out -->
            <h2 class="mt-5 pt-5 ml-5 pl-5 home"><?php the_field('masthead_phrase') ?> </h2>
            <button class="mastheadBtn"><a href="contact"><?php the_field('masthead_button1') ?></a></button>
        </article>
    </section>
 
    <section class="row teaSelection mt-5">
        <?php echo do_shortcode ('[tea_shortcode]' ) ?>  
    </section>

    <div class="d-flex justify-content-center mt-5 mb-4">
            <div class="divider"></div>
        </div>

    <section class="row mt-5">
        <div class="col-xs-12 col-md-5 circle text-center">
            <img src="<?php the_field('featured_product_photo'); ?>">
        </div>
        <div class="col-xs-12 col-md-6 pr-2">
            <h3>Featured Product - 20% off!</h3>
            <h4><?php the_field('featured_product_title'); ?></h4>
            <p><?php the_field('featured_product_info'); ?></p>
            <a class="learnMore" href="#">Learn More about <?php the_field('featured_product_title') ?></a>
        </div>
    </section>

    <div class="d-flex justify-content-center mt-5 mb-4">
            <div class="divider"></div>
        </div>

    <section class="row infoSection mt-5">
        <div class="col-xs-12 col-md-6 ml-5 pl-5 pr-0 mr-0">
            <h3>Welcome to <?php the_field('page_title'); ?>!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Donec quis enim vel enim tempus dictum.</p>

            <p>Sed fermentum euismod ipsum, quis facilisis lorem faucibus vel. Nunc a eleifend massa. Proin ultrices mollis fringilla. Vestibulum id mollis mi. Mauris ac nisl imperdiet, ultricies urna quis, tincidunt orci. Duis a justo leo.</p>

            <p>Morbi ultricies iaculis risus at ullamcorper. Cras dictum justo fringilla, egestas nisl ut, vestibulum elit. Nam consequat magna quis molestie faucibus. Mauris dapibus odio dapibus pellentesque fringilla.</p>
        </div>
        <div class="col-xs-12 col-md-5 mr-0 pr-0 photo"><img class="ml-5" src="<?php the_field('sectionphoto'); ?>"></div>
    </section>
   
    <div class="d-flex justify-content-center mt-5 mb-4">
            <div class="divider"></div>
        </div>

    <!-- display the posts -->
    <section class="blogPosts mt-5 pr-4 pl-4"> 
        
        <?php 
        //arguments to pass in to our query WP_Query
        $args = array (
            'showposts' => '1',
            'category_name' => 'tea',
        );

        $the_query = new WP_Query($args); ?>
        <!-- start our WP query -->
        <h4 class="pb-3 text-uppercase text-right mr-5 fromBlog">From the Blog</h4>
        <div class="d-flex">
            <?php while($the_query -> have_posts()) : $the_query -> the_post(); 
            ?> <!-- while query variable has posts going to spit out content -->
            <!-- displays the Post Title with Hyperlink -->
            <li class="d-flex justify-content-center">
                
                <!-- featured image -->
                    <!-- grab image in whatever default settings it has -->
                <!-- display the post excerpt -->
                <div class="row blogPost">
                    <div class="thumbnail col-xs-12 col-md-6"><?php the_post_thumbnail(); ?></div>
                    <div class="col-xs-12 col-md-6">
                        <a class="title" href="<?php the_permalink() ?>"><?php the_title(); ?>
                        <?php the_excerpt(__('(more..)')); ?></a> 
                    </div>
                </div>
                
            </li>
            <!-- repeat the process and reset once it hits the limit - defined limit (no more than 5) and then kill it -->
            <?php
                endwhile;
                wp_reset_postdata();
                wp_reset_query(); 
            ?>
        </div>
    </section>

    <section class="mt-5" style="background-image: url(<?php the_field('newsletter_photo'); ?>); height: 500px; background-repeat: no-repeat; background-size: cover; background-position: bottom center">
        <div class="overlay">
            <p>Stay up to date with Soleil Tea.  Subscribe to our mailing list.
            <?php echo do_shortcode ('[wpforms id="466" title="false" description="false"]' ) ?>   
        </div>
    </section>

    </main>
</div>

<?php
    get_footer();
?>