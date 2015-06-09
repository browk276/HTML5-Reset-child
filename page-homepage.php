<?php
/**
* Template Name: Home Page Template
*/
get_header()?>

<div class="row highlights">
	<div class="post-highlight col-md-6">
		<!-- Goal: get most recent post from the Dry Rot category-->
		<?php $the_query = new WP_Query('category_name=dryrot&posts_per_page=1');
			if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
		?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
		<?php endwhile; endif; ?>
	</div>
	<div class="post-highlight col-md-6">
		<!-- Goal: get the most recent post from Water Leaks category-->
		<?php $the_query = new WP_Query('category_name=water&posts_per_page=1');
			if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
		?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
		<?php endwhile; endif; ?>
	</div>
</div>

<div class="row">
	<div class="content col-md-8">
		<?php if (have_posts()) : while (have_posts()): the_post(); ?>
			<article class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
				<?php edit_post_link(__('Edit this page', 'html5reset'), '<p>', '</p>'); ?>
			</article>
		<?php endwhile; endif; ?>
		
		<!-- create one more of the N most recent posts -->
		<?php $the_query = new WP_Query('posts_per_page=4');
			if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
		?>
		<article class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<?php endwhile; endif; ?>
		</article>
	</div>
	<div class="sidebar col-md-4">
		<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>