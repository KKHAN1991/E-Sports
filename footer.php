<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package esportsWP
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

				<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>

<!--			<a href="--><?php //echo esc_url( __( 'http://wordpress.org/', 'esportswp' ) ); ?><!--">--><?php //printf( __( 'Proudly powered by %s', 'esportswp' ), 'WordPress' ); ?><!--</a>-->
<!--			<span class="sep"> | </span>-->
<!--			--><?php //printf( __( 'Theme: %1$s by %2$s.', 'esportswp' ), 'esportsWP', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
