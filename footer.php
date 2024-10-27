<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clark
 */

?>

	<footer id="colophon" class="site-footer  text-center" >
		<div class=".ftco-footer">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'clark' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'clark' ), 'Saikat' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'clark' ), 'clark', '<a href="http://underscores.me/">Al Mumeetu Saikat</a>' );
				?>
		</div><!-- ..ftco-footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
