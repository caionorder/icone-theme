<section id="internas">
	<article>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<h2><?php the_title(); ?></h2>

					<?php the_content(); ?>


				<?php //comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>
	</article>
</section>