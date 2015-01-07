<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package esportsWP
 */

get_header(); ?>




<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<?php while (have_posts()) : the_post(); ?>
<!--			<section id="front-page-slider">-->
<!--				<div id="front-page-slider-main">-->
<!--					--><?php
//					$args = array(
//						'post_type' => 'image-slider',
//						'orderby' => 'menu_order',
//						'order' => 'ASC',
//						'posts_per_page' => -1
//					);
//					$slides = new WP_Query($args);
//					//print_r($slides);
//					?>
<!--					--><?php
//					if ($slides->have_posts()) :
//						?>
<!--						<div class="flexslider">-->
<!--							<ul class="slides">-->
<!--								--><?php //while ($slides->have_posts()) : $slides->the_post(); ?>
<!--									<li>-->
<!--										<a target="_blank" href="--><?php //echo get_post_meta($post->ID, 'image_link', true); ?><!--">-->
<!--											--><?php //the_post_thumbnail('image-slider'); ?>
<!--											--><?php
//											$image_caption = get_post_meta($post->ID, 'image_caption', true);
//											if (!empty($image_caption))
//											{
//												?>
<!--												<p class="flex-caption">--><?php //echo $image_caption; ?><!--</p>-->
<!--											--><?php
//											}
//
//											?>
<!--										</a>-->
<!--									</li>-->
<!--								--><?php //endwhile ?>
<!--							</ul>-->
<!--						</div>-->
<!--					--><?php //endif; ?>
<!--				</div>-->
<!--			</section>-->




			<section id="front-page-latest-posts">

				<?php $latestPosts = new WP_Query('cat=2,6&posts_per_page=5') ?>

				<?php if ($latestPosts->have_posts()) : ?>
					<?php while ($latestPosts->have_posts()) : $latestPosts->the_post(); ?>


						<?php get_template_part('content'); ?>

					<?php endwhile; ?>

				<?php else : ?>
					<!--							Else Content-->
				<?php endif;
				wp_reset_postdata(); ?>


			</section>


		<?php endwhile; // end of the loop. ?>


	</main>
	<!-- #main -->
</div><!-- #primary -->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
