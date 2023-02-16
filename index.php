<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saltbox
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php get_template_part( 'inc/section', 'banner'); ?>

	<?php get_template_part( 'inc/section', 'secondary-menu'); ?>

	<?php get_template_part( 'inc/section', 'warehouses'); ?>

	<?php get_template_part( 'inc/section', 'office-suites'); ?>

	<?php get_template_part( 'inc/section', 'benefits'); ?>

	<?php get_template_part( 'inc/section', 'team'); ?>

	<?php get_template_part( 'inc/section', 'neighborhood'); ?>

	<?php get_template_part( 'inc/section', 'testimonials'); ?>

	<?php get_template_part( 'inc/section', 'newsletter'); ?>


	</main><!-- #main -->

<?php
get_footer();
