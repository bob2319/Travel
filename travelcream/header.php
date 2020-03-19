<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TravelCream
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<span class='udapt-menu'>MENU</span>
	<div style='display: none' class='items-menu'>
	<span>CLOSE</span>
    </div>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'travelcream' ); ?></a>
<?php if( have_rows('present') ): 
while( have_rows('present') ): the_row();    
    // переменные
    $image = get_sub_field('preset_image');
    $title = get_sub_field('present_title'); 
    $sup = get_sub_field('present_title_sup');
    ?>
	<header style='background-image: url(<?php echo $image?>)' id="masthead" class="site-header">
		<div class='container'>
			<div class='row center-row'>
				<!-- logo -->
				<div class='logo col-2'>
					<?php 
					$logo = the_custom_logo();
					if( $logo ){
						echo $logo;
					}
					else{
						echo '<a href="#"><h1 class="logo_text">TravelCream</h1></a>';
					}
					?>
				</div>

				<!-- header nav menu -->
				<?php wp_nav_menu( [ 
				'container_class' => 'menu-header col-4',
				'theme_location'  => 'header-menu',
				'add_li_class'	=>	'menu-header-item',
				'menu_link_class' => 'header-menu-link'
				] ); ?>

				<!-- logo button -->
				<div class='header-wrapper-header col-2 offset-4'>
				<button class='login-button'> Login </button>
				</div>

				<div class='header-present-text'>
					<h2 class='header-present-text_title'><?php echo $title?></h2>
					<p class='header-present-text_sup'><?php echo $sup?></p>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<?php endwhile; ?>
<?php endif; ?>
	<div id="content" class="site-content">
	<div class='container'>
