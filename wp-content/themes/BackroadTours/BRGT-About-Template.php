<?php
/**
 * Template Name: BRGT - About;
 * Description: template for the about page - navigation, masthead with title, followed by a block of text, a photo, then a two-column section, a section (with triangle cutout) perfect for quotes, and finally an image gallery using modula, before a footer.
 * The about page template file
 * 
 **/
get_header(); //hook
/** require 'header.php' -alternative to get_header*/
?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    
    <!-- let's use the featured image for the masthead image -->
    <section class="masthead mb-5 row" style="background-image: url(<?php the_field('masthead_image'); ?>); height: 400px; background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-position: center center background-attachment: fixed;"> <!-- display image -->
        <article class="col-12">
            <h1 class="text-center pt-5"><?php the_field('page_title'); ?></h1><!-- use title of page to display title of page - looks at url of page, looks for page title and spits it out -->
        </article>
    </section>

    <section class="welcomeAbout text-center pl-5 pr-5">
        <h3>Experience The Road Less Travelled with Backroads Guided Tours</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Donec quis enim vel enim tempus dictum.</p>

        <p>Sed fermentum euismod ipsum, quis facilisis lorem faucibus vel. Nunc a eleifend massa. Proin ultrices mollis fringilla. Vestibulum id mollis mi. Mauris ac nisl imperdiet, ultricies urna quis, tincidunt orci. Duis a justo leo.</p>

        <p>Morbi ultricies iaculis risus at ullamcorper. Cras dictum justo fringilla, egestas nisl ut, vestibulum elit. Nam consequat magna quis molestie faucibus. Mauris dapibus odio dapibus pellentesque fringilla.</p>
    </section>

    <div class="parallax" style="background-image: url(<?php the_field('parallax_image'); ?>); min-height: 400px; background-repeat: no-repeat; background-size: cover; background-position: center center"></div>

    <section class="row infoSection">
        <div class="col-xs-12 col-md-5 pl-5 pr-5"><img class="ml-5" src="<?php the_field("info_image"); ?>"></div>
        <div class="col-xs-12 col-md-7 pl-5 pr-5">
            <h4>In-depth destination discovery.</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor nunc a ante feugiat, a ultricies turpis dictum. Mauris est mauris, convallis nec nulla bibendum, lacinia iaculis mi. Curabitur ornare quam sit amet urna mattis suscipit. Nulla lorem quam, dictum in feugiat quis, suscipit nec metus.<p> 
           
            <h4>Small means perfectly formed.</h4>
            <p>In bibendum, ante id laoreet maximus, neque augue aliquam velit, ac scelerisque velit eros non ex. Proin at ligula consectetur, molestie quam vitae, rhoncus nibh. Nunc pharetra arcu enim, quis luctus lectus ultrices nec. Nunc ultrices blandit quam eu finibus. Curabitur tempus, sem id tristique posuere, dolor tortor fringilla diam, at fermentum risus orci et velit. Duis elementum condimentum mollis.
            <h4>Learn from the locals.</h4>
            <p>Vestibulum eget mollis arcu, nec mattis ipsum. Maecenas nisl neque, blandit sed venenatis nec, pharetra in arcu. Vestibulum accumsan nulla eu enim dictum, dictum blandit nulla pulvinar. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer sed arcu ipsum. Etiam tempor eleifend odio, ac luctus mauris scelerisque a.</p>
        </div>
    </section>

    <section class="row testimony p-5">
        <q>Integer sagittis, urna eget efficitur scelerisque, orci metus auctor ante, sodales molestie nisl nunc sed elit. Nullam imperdiet cursus tincidunt.</q> <cite class="ml-5">~ Client</cite>
    </section>

    <section class="aboutGallery">
        <h4 class="text-center mt-3 mb-5 galleryHeader"> See Where Our Clients Have Experienced The Backroads Tour!</h4>
        <div><?php echo do_shortcode( '[modula id="329"]' ); ?></div>

    </section>
    



    </main>
</div>

<?php
    get_footer();
?>