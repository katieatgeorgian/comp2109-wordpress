<?php
/**
 * Template Name: Soleil - Contact;
 * Description: template for the contact page - navigation, masthead, followed by a contact form in one column and contact information in the second, and finally a footer.
 *  The contact page template file
 * 
 **/
get_header(); //hook
/** require 'header.php' -alternative to get_header*/
?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    
    <!-- let's use the featured image for the masthead image -->
    <section class="masthead mb-5 row" style="background-image: url(<?php the_field('masthead_image'); ?>); height: 400px; background-repeat: no-repeat; background-size: cover; background-position: center center"> <!-- display image -->
        <!-- <article class="col-12"> -->
            <!-- <h1 class="text-center pt-5"><?php the_field('page_title'); ?></h1> 
        </article> -->
    </section>

    <section class="row mx-auto" style="background-image: url(<?php the_field('background'); ?>); background-repeat: no-repeat; background-size: cover; " >
        <div class="col-xs-12 col-md-2"></div>
        <div class="col-xs-12 col-md-4">
            <h2>Visit us...</h2>
            <address>
            1 Georgian Drive <br/>
            Barrie, Ontario
            </address>

            <h4 class="mt-5 mb-0">Phone Number</h4>
            <p>(705) 555-5555</p>
            <h4 class="mb-0">Email</h4>
            <p>info@soleilteaco.ca</p>
        </div>
        <div class="col-xs-12 col-md-6 contactForm"> 
            <h2>Contact us...</h2>
            <?php echo do_shortcode( '[wpforms id="533" title="false" description="false"]' ); ?>
        </div>
    </section>
    </main>
</div>

<?php
    get_footer();
?>