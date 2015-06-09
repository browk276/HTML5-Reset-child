<?php
/**
 * 
 */?>
 
<?php get_header(); ?>
<div class="content row">
	<div class="content col-md-8">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="page" id="page-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
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
	<div class="sidebar col-md-4">
		<?php post_navigation(); get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>