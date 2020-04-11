<?php 
/* 
* Template Name: Soleil Post Template
* Template Post Type: post 
*/

get_header('post');
?>

<div class="wrap"> 
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="row mt-5">
                <?php 
                    if (have_posts()) : while (have_posts()) : the_post(); // as long as post run through post (loop) and grab content and spit out post
                ?>
                <div class="row col-xs-12 col-md-7 mr-3 ml-5">
                    <div class="ml-5">
                        <div class="mb-3 text-center float-right ml-5"> <?php the_post_thumbnail(); ?> </div>
                        <div class="title"> <?php the_title(); ?></div>
                        <div class="postDivider mt-2 mb-2"></div>
                        <?php the_content(); ?> <!-- whatever put in editor -->
                        <div class="d-flex">
                            <p class="mr-2"><small><?php the_author(); ?></small></p>
                            <p class="ml-2"><small><?php echo get_the_date(); ?> </small></p> <!-- echo out because of how date stored in db -->
                            <p class="ml-2"><small><?php the_tags(); ?></small></p>
                            <p><?php category_description();  ?></p>
                        </div>
                    
                        <!-- pagination -->
                        <?php 
                            the_post_navigation(
                                array(
                                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
                                    '<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
                                    '<span class="post-title">%title</span>',
                                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
                                    '<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
                                    '<span class="post-title">%title</span>',
                                )
                            );
                        ?>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>

                <!-- add the sidebar -->
                <article class="sidebar-container col-xs-12 col-md-4">
                    <?php get_sidebar(); ?>
                </article>
                </div> <!-- ends page -->
                <!-- add comment section -->
                <section class="comment-section-container">
                    <?php 
                        //if comments are open or we have at least one comment, load up the comment template -->
                        if (comments_open() || get_comments_number() ) : comments_template();
                        endif;
                    ?>
                </section>
            
        </main>
    </div>

</div>
<section class="mt-5" style="background-image: url('http://localhost/wordpress/wp-content/uploads/2020/03/teapot-lineup2.jpg'); height: 500px; background-repeat: no-repeat; background-size: cover; background-position: bottom center">
        <div class="overlay">
            <p>Stay up to date with Soleil Tea.  Subscribe to our mailing list.
            <?php echo do_shortcode ('[wpforms id="466" title="false" description="false"]' ) ?>   
        </div>
    </section>
<?php 
    get_footer('post');
?>