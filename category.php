<?php
/**
 *category.php
 */
get_header(); ?>
<div class="row">
	<div class="content col-md-8">
		<h2><?php single_cat_title( '' , true); ?></h2>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="post" id="post-<?php the_ID();?>">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry-content">
				<?php the_excerpt(); ?>
				<?php wp_link_pages(array('before' => __('Pages: ','html5resetchild'), 'next_or_number' => 'number')); ?>
				<?php the_tags( __('Tags: ','html5resetchild'), ', ', ''); ?>
				<?php posted_on(); ?>
			</div>
			<?php edit_post_link(__('Edit this entry', 'html5resetchild'), '<p><strong>', '</strong></p>'); ?>
		</article>
	<?php endwhile; else: ?>
		<article class="post post-single" id="post-<?php the_ID();?>">
			<p><?php _e('This category has no posts.'); ?></p>
		</article>

	<?php endif; ?>
	</div>
	<div class="sidebar col-md-4">
		<?php post_navigation(); get_sidebar();?>
	</div>
</div>
<?php get_footer();?>