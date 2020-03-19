<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TravelCream
 */

?>

	</div><!-- #content -->
	</div><!-- container -->
	<a name='deals'></a>
	<footer style='padding-top: 90px' id="colophon" class="site-footer col-10 offset-1 col-sm-12 offset-sm-0">
	<div class=container>
	<div class='row widgets_wrapper'>
	<?php dynamic_sidebar( 'Cities' ); ?>
	<?php dynamic_sidebar( 'Explore' ); ?>
	<?php dynamic_sidebar( 'about-as' ); ?>
	<?php dynamic_sidebar( 'contact' ); ?>
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
