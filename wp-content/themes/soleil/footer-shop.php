<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<!-- newsletter/mailing list section -->
		<section style="background-image: url('http://localhost/wordpress/wp-content/uploads/2020/03/teapot-lineup2.jpg'); height: 500px; background-repeat: no-repeat; background-size: cover; background-position: bottom center">
			<div class="overlay">
				<p>Stay up to date with Soleil Tea.  Subscribe to our mailing list.
				<?php echo do_shortcode ('[wpforms id="466" title="false" description="false"]' ) ?>   
			</div>
		</section>
		<!-- bottom green footer -->
		<div class="site-info">
			<div class="row justify-content-between">
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation col-xs-12 col-md-4" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => '',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
			<!-- social media icons -->
				<div class="col-xs-12-col-md-4">
					<ul class="row justify-content-center">
					<li class="list-unstyled px-1">
						<a title="Facebook" href="#"
						><i class="fa fa-facebook-square icons"></i
						></a>
					</li>
					<li class="list-unstyled px-1">
						<a title="Instagram" href="#"
						><i class="fa fa-instagram icons"></i
						></a>
					</li>
					<li class="list-unstyled px-1">
						<a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
					</li>
					</ul>

				</div>
				<!-- contact info -->
				<div class="col-xs-12 col-md-4 address text-right">
					<p class="font-weight-bold mb-0">Address</p>
					<address>
					1 Georgian Drive<br>
					Barrie, Ontario
					</address>
					<p>
						(705) 555-5555
					</p>	
				</div>
		
			</div><!-- made up div d-flex row -->

			<div class="row">
				<p class="pl-3"><small>&#169; Soleil Tea Co. - All Rights Reserved</small></p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>