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
	<div class="site-info">
		<div class="justify-content-center row">
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
			<div class="col-xs-12 col-md-5">
				<p><small>&#169; Backroads Guided Tours - All Rights Reserved</small></p>
			</div>
			<div class="col-xs-12 col-md-3 address text-right">
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
		<div>
			<section>
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
			</section>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
