<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lizzie_Theme_(Underscore)
 */

?>

<footer>
	<div class="container-fluid site-footer">
		<div class="row py-5 max-width">
			<div class="col-6">
				<div class="site-info text-light">

					Lizzie Merrit logo
					<!-- <span class="sep"> | </span> -->

				</div>

			</div>

			<div class="col-6">
				<div class="menu-footer">

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-footer',
						)
					);
					?>

				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid site-footer-lower">
		<div class="row pt-4 max-width">

			<div class="col-6">
				<p class="text-light">© <?php echo date("Y"); ?> Lizzie Merritt</p>
			</div>

			<div class="col-6">
			<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-footer-lower',
						)
					);
					?>

			</div>

		</div>


	</div>




</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
