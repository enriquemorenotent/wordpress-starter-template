<?php get_header() ?>

<div class="main">
	<?php while (have_posts()) : ?>
		<?php the_post() ?>

		<?php the_content() ?>
	<?php endwhile ?>
</div>

<?php get_footer() ?>