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
<div class="content row">
	<div class="spacer col-md-1"></div>
	<div class="content col-md-8">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="post" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<?php posted_on(); ?>
				<div class="entry">
					<?php the_content(); ?>
					<?php wp_link_pages(array('before' => __('Pages: ',
					'html5reset'), 'next_or_number' => 'number')); ?>
				</div>
				<?php edit_post_link(__('Edit this entry', 'html5reset'), '<p>', '</p>'); ?>
			</article>
			<?php endwhile; else: ?> 
			<article class="post">
				<h3>I'm sorry, but we can't find what you are looking for.</h3>
			</article>
			<?php endif;?>
	</div>
	<div class="sidebar col-md-2">
		<?php get_sidebar(); ?>
	</div>
	<div class="spacer col-md-1"></div>
</div>
<?php get_footer(); ?>