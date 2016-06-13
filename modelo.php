<?php
/*
Template Name: modelo
*/
get_header(); ?>

    <section id="corpo">
        <article>
            <h3>Titulo</h3>
                <ul class="loop">

                	<?php query_posts('cat=3&showposts=30') ?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <li class="<?php echo !($x % 2) ? "direita" : "esquerda"; ?>">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo destacada(); ?>&w=456&h=337&zc=1&q=100" alt="<?php the_title(); ?>"/>
                            <h4><?php the_title(); ?></h4>
                        </a>

                    </li>
                    <?php endwhile; // end of the loop. ?>

                </ul>
        </article>
    </section>
<?php get_footer(); ?>
