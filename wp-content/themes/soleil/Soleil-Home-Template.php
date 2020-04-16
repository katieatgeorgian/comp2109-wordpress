<?php
/**
 * Template Name: Soleil - Home;
 * Description: template for the home page - navigation, masthead with title CTA, a gallery of sorts (custom post type), featured product section, a two-column section perfect for text and an image, and finally the latest blog posts, before ending with a footer.
 * The home page template file
 * 
 **/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    
    <!-- masthead -->
    <section class="masthead row" style="background-image: url(<?php the_field('masthead_image'); ?>); height: 500px; background-repeat: no-repeat; background-size: cover; background-position: bottom center"> <!-- display image -->
        <article class="col-12 mastheadGrid">
            <h1><?php the_field('page_title'); ?></h1><!-- use title of page to display title of page - looks at url of page, looks for page title and spits it out -->
            <h2 class="mt-5 pt-5 ml-5 pl-5 home"><?php the_field('masthead_phrase') ?> </h2>
            <button class="mastheadBtn"><a href="/wordpress/shop"><?php the_field('masthead_button1') ?></a></button>
        </article>
    </section>
 
    <!-- shortcode/CPT -->
    <section class="row teaSelection mt-5">
        <?php echo do_shortcode ('[tea_shortcode]' ) ?>  
    </section>

    <!-- featured product -->
    <section class="featuredProduct row mt-2 mb-3 align-items-center">
        <h3 class="pb-3">Featured Product - 20% off!</h3>
        <div>
            <?php echo do_shortcode('[featured_products per_page="1" columns="1"]'); ?>
        </div>
        <button class="learnMore mb-5"><a href=<?php the_field('featured_product_url') ?>>Learn More about <?php the_field('featured_product_title') ?></a></button>
    </section>

    <!-- welcome section -->
    <section class="row infoSection mt-5">
        <div class="col-xs-12 col-md-6 ml-5 pl-5 pr-0 mr-0">
            <h3 class="ml-5">Welcome to <?php the_field('page_title'); ?>!</h3>
            <p class="ml-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Donec quis enim vel enim tempus dictum.</p>

            <p class="ml-5">Sed fermentum euismod ipsum, quis facilisis lorem faucibus vel. Nunc a eleifend massa. Proin ultrices mollis fringilla. Vestibulum id mollis mi. Mauris ac nisl imperdiet, ultricies urna quis, tincidunt orci. Duis a justo leo.</p>

            <p class="ml-5">Morbi ultricies iaculis risus at ullamcorper. Cras dictum justo fringilla, egestas nisl ut, vestibulum elit. Nam consequat magna quis molestie faucibus. Mauris dapibus odio dapibus pellentesque fringilla.</p>
        </div>
        <div class="col-xs-12 col-md-5 mr-0 pr-0 infoPhoto"><img class="ml-5" src="<?php the_field('sectionphoto'); ?>">
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