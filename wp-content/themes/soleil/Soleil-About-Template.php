<?php
/**
 * Template Name: Soleil - About;
 * Description: template for the about page - navigation, masthead, followed by a section of text layed on top of an image and finally the latest blog posts, before ending with a footer.
 * The about page template file
 * 
 **/
get_header();
?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <!-- masthead -->
        <section class="masthead row" style="background-image: url(<?php the_field('masthead_image'); ?>); height: 500px; background-repeat: no-repeat; background-size: cover; background-position: center center"> <!-- display image -->
            <article class="col-12 mastheadGrid">
                <h1><?php the_field('page_title'); ?></h1>
            </article>
        </section>
 
        <!-- about story section -->
        <section class="row mt-5 justify-content-center">
            <div class="aboutOverlay">
                <img class="imgAboutOverlay" src=<?php the_field('sectionphoto'); ?> alt="woman holding mug">
                <div class="overlayTest"></div>
                <div class="textAboutOverlay text-right mr-3">
                    <h3>Our Story</h3>
                    <p>Carajillo flavour et extraction, white decaffeinated blue mountain macchiato caramelization cortado rich. Foam doppio macchiato extra half and half, beans half and half cinnamon decaffeinated shop. Decaffeinated, roast sugar, variety black, instant dark breve strong steamed trifecta viennese.</p>
                    <p>Flavour percolator café au lait americano rich coffee cortado coffee coffee grounds blue mountain lungo. Instant frappuccino, redeye acerbic percolator mocha cultivar est turkish espresso. Cortado est, sugar cream foam barista and that decaffeinated redeye cultivar.</p>
                    <p>Cream bar, extraction affogato, steamed french press seasonal turkish latte. Trifecta whipped, roast, lungo aftertaste seasonal extraction body steamed. Blue mountain, sugar, a, milk french press cappuccino, americano single origin sweet half and half variety saucer.</p>
                </div>
            </div>
 
        </section>
   
        <!-- display one post -->
        <section class="blogPosts mt-5 pr-4 pl-4"> 
            <?php 
            $args = array (
                'showposts' => '1',
                'category_name' => 'tea',
            );
            $the_query = new WP_Query($args); ?>
            <h4 class="pb-3 text-uppercase text-right mr-5 fromBlog">From the Blog</h4>
            <div class="d-flex">
                <?php while($the_query -> have_posts()) : $the_query -> the_post(); 
                ?> 
                <li class="d-flex justify-content-center">
                    <div class="row blogPost">
                        <div class="thumbnail col-xs-12 col-md-6"><?php the_post_thumbnail(); ?></div>
                        <div class="col-xs-12 col-md-6">
                            <a class="title" href="<?php the_permalink() ?>"><?php the_title(); ?>
                            <?php the_excerpt(__('(more..)')); ?></a> 
                        </div>
                    </div>
                    
                </li>
                <?php
                    endwhile;
                    wp_reset_postdata();
                    wp_reset_query(); 
                ?>
            </div>
        </section>
    </main>
</div>

<?php
    get_footer();
?>