<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset Child 1.0
 */
get_header(); ?>
<div class="row">
	<div class="content col-md-10">
		<h2><?php _e('Error 404 - Page Not Found','html5reset'); ?></h2>
	</div>
	<div class="sidebar col-md-2">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>