<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<!-- link bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<!--Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
	/>
	
	<!-- link CSS -->
	<link rel="stylesheet" href="<?php echo esc_url( home_url('wp-content/themes/BackroadTours/inc/css/BRGT-custom.css') ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page container" class="site">
<header id="masthead">
	<div class="row justify-content-between">
		<article>
			<!-- logo container -->
			<a href="backroad-guided-tours"><img class="logo ml-5 mt-2 mb-1" src="<?php the_field('logo'); ?>"></a>
		</article>
		<nav class="mr-2 mr-5">
			<?php
				wp_nav_menu( array(
					'menu' => 'BRGT', //do not fall back to first non-empty menu
					'theme_location' => '', //leave blank
					'fallback_cb' => false //do not fallback to wp_page_menu()
				));
			?>
		</nav>
	</div>
</header><!-- #masthead -->
<div id="content" class="site-content">
