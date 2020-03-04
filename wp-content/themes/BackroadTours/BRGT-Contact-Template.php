<?php
/**
 * Template Name: BRGT - Contact;
 * The contact page template file
 * 
 **/
get_header(); //hook
/** require 'header.php' -alternative to get_header*/
?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    
    <!-- let's use the featured image for the masthead image -->
    <section class="masthead mb-5 row" style="background-image: url(<?php the_field('masthead_image'); ?>); height: 400px; background-repeat: no-repeat; background-size: cover; background-position: center center"> <!-- display image -->
        <article class="col-12">
            <h1 class="text-center pt-5"><?php the_field('page_title'); ?></h1><!-- use title of page to display title of page - looks at url of page, looks for page title and spits it out -->
        </article>
    </section>

    <section class="row mx-auto" style="background-image: url(<?php the_field('background'); ?>); background-repeat: no-repeat; background-size: cover; " >
        <div class="col-xs-12 col-md-2"></div>
        <div class="col-xs-12 col-md-5 contactForm"> 
            <?php echo do_shortcode( '[wpforms id="348" title="false" description="false"]' ); ?>
        </div>
        <div class="col-xs-12 col-md-5">
            <h2>Contact Us...</h2>
            <h6>Email</h3>
            <p>info@backyardtours.ca</p>
            <h6>Phone Number</h3>
            <p>(705) 555-5555</p>
            <h6>International Phone Number</h6>
            <p class="font-weight-normal">1-800-555-5555</p>
            <p><small>We will respond to you within 24 hours</small></p>
        </div>
    </section>

    <section class="row testimony p-5 mb-3 justify-content-center">
        <h3 class="contactQuote">Experience The Road Less Travelled</h3>
    </section>
    </main>
</div>

<?php
    get_footer();
?>