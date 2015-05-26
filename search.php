<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<div class="row">
	<div class="spacer col-md-1"></div>
	<div class="content col-md-8">
		<?php if (have_posts()) : ?>

			<h2><?php _e('Search Results','html5reset'); ?></h2>

			<?php post_navigation(); ?>

			<?php while (have_posts()) : the_post(); ?>

				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

					<h2><?php the_title(); ?></h2>

					<?php posted_on(); ?>

					<div class="entry">

						<?php the_excerpt(); ?>

					</div>

				</article>

			<?php endwhile; ?>

		<?php else : ?>

			<h2><?php _e('Nothing Found','html5reset'); ?></h2>

		<?php endif; ?>
	<div class="sidebar col-md-2">
		<?php post_navigation(); 
		get_sidebar();?>
	</div>
	<div class="spacer col-md-1"></div>
</div>
<?php get_footer(); ?>
