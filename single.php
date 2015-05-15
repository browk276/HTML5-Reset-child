<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Child-Theme
 * @since HTML5 Reset Child 1.0
 */?>

<div class="row">
	<div class="header col-md-12">
		<?php get_header(); ?>
	</div>
</div>

<div class="row">
	<div class="spacer col-md-1"></div>
	<div class="content col-md-8">
		<?php if (have_post()) : while (have_posts()) : the_post(); ?>
		<article class="post post-single" id="post-<?php the_ID();?>">
			<h1>SSSIIINNNGGGLLLEEE!!!<?php the_title(); ?></h1>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => __('Pages: ','html5resetchild'), 'next_or_number' => 'number')); ?>
				<?php the_tags( __('Tags: ','html5resetchild'), ', ', ''); ?>
				<?php posted_on(); ?>
			</div>
			<?php edit_post_link(__('Edit this entry', 'html5resetchild'), '<p><strong>', '</strong></p>'); ?>
		</article>
	<?php endwhile; else: ?>
		<article class="post post-single" id="post-<?php the_ID();?>">
			<h2>OOPS!</h2>
			<p><?php _e('Sorry, no post found.'); ?></p>
		</article>

	<?php endif; ?>
	</div>
	<div class="sidebar col-md-2">
		<?php post_navigation(); get_sidebar();?>
	</div>
	<div class="spacer col-md-1"></div>
</div>
<?php get_footer(); ?>
