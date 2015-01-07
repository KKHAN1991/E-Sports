<?php
/**
 * @package esportsWP
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header id="post-single-header">
		<h2><?php the_title(); ?></h2>
		<p id="post-single-header-author">Author:
			<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
		</p>
		<p id="post-single-header-date">Date: <a href="">3rd December 2014</a></p>
	</header>
	<section id="post-single-content">
		<?php the_post_thumbnail('large-thumbnail');  ?>
		<div id="post-single-content-area">
			<?php the_content(); ?>
		</div>

	</section>
	<div id="post-single-hr"></div>
	<footer id="post-single-footer">
		<section id="post-single-footer-tags">
			<p>Tags: <?php the_tags(); ?></p>
		</section>
		<section id="post-single-footer-share">
			<div class="social">
				<p>Share This Post on:</p>
				<!--Twitter-->
				<a class="twitter" href="http://twitter.com/share?text=<?php echo urlencode(get_the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=shemul49rmc&related=<?php echo urlencode("shemul49rmc:support me"); ?>"title="Share on Twitter" rel="nofollow" target="_blank">Twitter</a>
				<!--Facebook-->
				<a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php get_the_permalink();?>&t=<?php get_the_title(); ?>">Facebook</a>
				<!--Google Plus-->
				<a class="google-plus" target="_blank" href="https://plus.google.com/share?url=<?php get_the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;">Google+</a>
				<!--Reddit-->
				<a class="reddit" href="http://www.reddit.com/submit?url=<?php get_the_permalink(); ?>&amp;title=<?php get_the_title(); ?>" title="Reddit" rel="nofollow" target="_blank">Reddit</a>
				<!--Linkedin-->
				<a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php get_the_title(); ?>&amp;url=<?php get_the_permalink(); ?>" title="Share on LinkedIn" rel="external nofollow" rel="nofollow" target="_blank">Share on LinkedIn</a>
			</div>
		</section>
		<section id="post-single-footer-more">

			<p id="post-single-footer-more-previous">
				<?php previous_post_link('%link', 'Previous Post', TRUE); ?>
			</p>
			<p id="post-single-footer-more-next">
				<?php next_post_link('%link', 'Next Post', TRUE); ?>
			</p>

		</section>
		<section id="post-single-footer-disqus">
			<?php comments_template(); ?>
		</section>

	</footer>


</article><!-- #post-## -->


