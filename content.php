<?php
/**
 * @package esportsWP
 */
?>

<article class="article-main">

	<section class="article-content">
		<div class="article-content-meta">

			<div class="article-content-meta-time">
				<?php
				$archiveDay = get_the_time('d');
				$archiveMonth = get_the_time('m');
				$archiveYear = get_the_time('Y');
				?>

				<h3 class="article-content-meta-time-day"><a href="<?php echo get_day_link($archiveYear, $archiveMonth, $archiveDay); ?>"><?php the_time('jS'); ?></a></h3>
				<a href="<?php echo get_month_link($archiveYear, $archiveMonth); ?>"><?php the_time('F'); ?></a>
				<a href="<?php echo get_year_link($archiveYear); ?>"><?php the_time('Y'); ?></a>
			</div>
			<p class="article-content-meta-author"><a
					href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>

		</div>
		<div class="article-content-main">
			<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>

			<p> <?php echo get_the_excerpt(); ?></p>

		</div>
		<div class="article-content-image"><?php the_post_thumbnail('small-thumbnail'); ?></div>
	</section>
	<section class="article-footer">
		<div class="article-footer-cat"><p>Categories:
				<?php
				$categories = get_the_category();
				$separator = ', ';
				$output = '';

				if ($categories)
				{
					foreach ($categories as $category)
					{
						$output .= '<a id="category" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
					}
					echo trim($output, $separator) . '.';
				}


				?></p></div>
		<div class="article-footer-readmore"><p><a href="<?php the_permalink(); ?>">Continue Reading!</a></p></div>
	</section>


</article>
