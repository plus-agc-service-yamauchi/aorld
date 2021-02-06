<?php get_header(); ?>

	<div class="mb-5 text-gray p-2">
		<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<p><small><?php the_time('Y年n月j日 l'); ?></small></p>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>