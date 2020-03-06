<?php
/**
 * Template Name: Backroad Guided Tours;
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
    <section class="masthead mb-5 row" style="background-image: url(<?php the_field('masthead_image'); ?>); height: 500px; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;"> <!-- display image -->
        <article class="col-12 mastheadGrid">
            <h1><?php the_field('page_title'); ?></h1><!-- use title of page to display title of page - looks at url of page, looks for page title and spits it out -->
            <h2 class="mt-3 home"><?php the_field('masthead_phrase') ?> </h2>
            <button class="mastheadBtn"><a href="contact"><?php the_field('masthead_button1') ?></a></button>
        </article>
    </section>
    <section class="row welcome justify-content-center pl-5 pr-5">
        <h3>Welcome to <?php the_field('page_title'); ?></h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Donec quis enim vel enim tempus dictum.</p>

        <p class="text-center">Sed fermentum euismod ipsum, quis facilisis lorem faucibus vel. Nunc a eleifend massa. Proin ultrices mollis fringilla. Vestibulum id mollis mi. Mauris ac nisl imperdiet, ultricies urna quis, tincidunt orci. Duis a justo leo.</p>

        <p class="text-center">Morbi ultricies iaculis risus at ullamcorper. Cras dictum justo fringilla, egestas nisl ut, vestibulum elit. Nam consequat magna quis molestie faucibus. Mauris dapibus odio dapibus pellentesque fringilla.</p>
    </section>
    <section class="row gallerySection">
        <div class="d-flex flex-wrap justify-content-between"><?php echo do_shortcode( '[tours_shortcode]' ); ?></div>
    </section>

    <section class="row infoSection">
        <div class="col-xs-12 col-md-5 pl-5 pr-5"><img class="ml-5" src="<?php the_field('mid_page_photo'); ?>"></div>
 
        <div class="col-xs-12 col-md-7 pl-5 pr-5">
            <h4>Discover</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor nunc a ante feugiat, a ultricies turpis dictum. Mauris est mauris, convallis nec nulla bibendum, lacinia iaculis mi. Curabitur ornare quam sit amet urna mattis suscipit. Nulla lorem quam, dictum in feugiat quis, suscipit nec metus.<p> 
           
            <h4>Explore</h4>
            <p>In bibendum, ante id laoreet maximus, neque augue aliquam velit, ac scelerisque velit eros non ex. Proin at ligula consectetur, molestie quam vitae, rhoncus nibh. Nunc pharetra arcu enim, quis luctus lectus ultrices nec. Nunc ultrices blandit quam eu finibus. Curabitur tempus, sem id tristique posuere, dolor tortor fringilla diam, at fermentum risus orci et velit. Duis elementum condimentum mollis.
            <h4>Experience</h4>
            <p>Vestibulum eget mollis arcu, nec mattis ipsum. Maecenas nisl neque, blandit sed venenatis nec, pharetra in arcu. Vestibulum accumsan nulla eu enim dictum, dictum blandit nulla pulvinar. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer sed arcu ipsum. Etiam tempor eleifend odio, ac luctus mauris scelerisque a.</p>
        </div>
    </section>
    <section class="row testimony p-5">
        <q>Integer sagittis, urna eget efficitur scelerisque, orci metus auctor ante, sodales molestie nisl nunc sed elit. Nullam imperdiet cursus tincidunt.</q> <cite class="ml-5">~ Client</cite>
    </section>
    
   

    <section class="blogPosts mt-5 pr-4 pl-4"> <!-- display the posts -->
        <!-- define our WP query parameters -->
        
        <?php 
        //arguments to pass in to our query WP_Query
        $args = array (
            'showposts' => '3',
            'category_name' => 'travel',
        );

        $the_query = new WP_Query($args); ?>
        <!-- start our WP query -->
        <h4 class="text-center pb-3">Latest Blog Posts</h4>
        <div class="d-flex">
            <?php while($the_query -> have_posts()) : $the_query -> the_post(); 
            ?> <!-- while query variable has posts going to spit out content -->
            <!-- displays the Post Title with Hyperlink -->
            <li class="d-flex justify-content-center">
                
                    <!-- featured image -->
                     <!-- grab image in whatever default settings it has -->
                    <!-- display the post excerpt -->
                    <div class="blogPost">
                        <a href="<?php the_permalink() ?>"> <!-- WP php hook to grab url of item --><?php the_title(); ?>
                        <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
                        <?php the_excerpt(__('(more..)')); ?></a> <!-- in functions there is a function - add "more" --> 
                        
                    </div>
                
            </li>
            <div class="d-flex justify-content-center mt-4 mb-4">
                <div class="divider mr-4"></div>
            </div>
            <!-- repeat the process and reset once it hits the limit - defined limit (no more than 5) and then kill it -->
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </section>


    </main>
</div>

<?php
    get_footer();
?>