<?php get_header(); ?>
<section id="middle">
	<div class="center">
		<div id="conteudopagina">

			<div class="titlepag">
				<h1><?php the_title(); ?></h1>
			</div>

			<div id="clipping">
				
				<?php
					$page = (get_query_var('paged')) ? get_query_var('paged') : 1; 
					while ( have_posts() ) : the_post();
				?>
				<div class="post">
					<div class="titleclipping">
						<span class='data'><?php echo get_the_date('d/m'); ?></span><h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					</div>
					<?php if(destacada()){ ?>
					<a href="<?php the_permalink() ?>">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php print destacada(); ?>&w=283&h=301&zc=1" align='left'>
					</a>
					<?php } ?>
					<p><?php print resumo(); ?></p>
				</div>
				<?php endwhile; // end of the loop. ?>

			</div>



			<div class="navigation">
			    <?php wp_pagenavi(); ?>
			</div>

			<div class="clear"></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>