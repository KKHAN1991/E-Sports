<?php
/**
 * Created by PhpStorm.
 * User: khan
 * Date: 05/12/14
 * Time: 10:05
 */

get_header(); ?>



<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section id="blog-page">
			<section id="blog-page-article">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>


			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */

				get_template_part( 'content', get_post_format() );
				?>


			<?php endwhile; ?>

			<?php esportswp_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		</section>

		<section id="blog-side-bar">
			<?php get_sidebar(); ?>
		</section>



	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
