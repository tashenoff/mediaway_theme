<?php get_header(); ?>


<?php get_template_part( 'template-parts/banner', 'single' ); ?>


	<div class="container my-8 mx-auto">

	<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			

		<?php endwhile; ?>

	<?php endif; ?>



	<div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div>

	</div>

<?php
get_footer();
