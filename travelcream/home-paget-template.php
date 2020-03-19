<?php
  /**
  * Template Name: Home page
  */
get_header(); 
?>

<?php get_template_part( 'inc/home_page/home-page-input');?>

<?php get_template_part( 'inc/home_page/section-flights');?>

<?php get_template_part( 'inc/home_page/section-hotel');?>

<?php get_template_part( 'inc/home_page/section-actions');?>

<?php get_template_part( 'inc/home_page/section-trips');?>

<?php get_footer(); ?>