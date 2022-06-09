<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package eoc
 */

get_header('404');
?>

	<main id="primary" class="main appear main--error">

		<section class="error-404 not-found">

			<div class="page-content content--error">
				<div class="canvas" id="canvas">
					<div id="p5_loading" class="loadingclass"><h1>404</h1></div>
				</div>
				<p>This page doesn't exist :( <br/> Return <a class="link--text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">home</a>.</p>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
