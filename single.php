<?php
/**
 * The template for displaying all single posts.
 *
 * @package esportsWP
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section id="blog-page-single">

		<?php while ( have_posts() ) : the_post(); ?>
			<section id="blog-page-single-article">
				<?php get_template_part( 'content', 'single' ); ?>

<!--				--><?php
//				// If comments are open or we have at least one comment, load up the comment template
//				if ( comments_open() || get_comments_number() ) :
//					comments_template();
//				endif;
//				?>
			</section>
		<?php endwhile; // end of the loop. ?>


			<section id="blog-side-bar">
				<?php get_sidebar(); ?>
			</section>

		</section>

		</main><!-- #main -->


	</div><!-- #primary -->

<?php get_footer(); ?>

