<!-- page template (not post) -->
<?php
/*
* Template Name: Working With Post Templates - Filtered
* Template Post Type: page
*/

get_header();
?>

<?php 
//build 2 arrays
$args = array(
    //grab post type which is post
    //post status - draft, published, etc.
    //order desc or asc display date order
    //posts per page if want something different than default setting (i.e. 10)
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'category_name' => 'cmsclass'
    'posts_per_page' => 2,
);

$arr_posts = new WP_Query( $args); //store array

//next array
$args1 = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'ASC',
    'category_name' => 'jewelry'
    'posts_per_page' => 2,
);

$arr_posts1 = new WP_Query( $arg1s);
?>

<section class="post-container">
    <h2>Filter By Category Name: cmsclass</h2>
    <?php 
        //call in first array - array stored in arr_posts
        if ($arr_posts-> have_posts() ) : 
            while ($arr_posts->have_posts() ) :
            ?>
            <!-- id will be called post- and whatever page id assigned as well as class -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div>
                    <!-- search content for featured image -->
                    <?php 
                        if (has_post_thumbnail() ) :
                            the_post_thumbnail();
                        endif;
                    ?>
                </div>
                <div>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title() ?></h1>
                    </header>
                    <div class="entry-content">
                        <?php the_excerpt() ?>
                    </div>
                </div>
            </article>
            <?php 
        endwhile;
        endif;
    ?>
</section>