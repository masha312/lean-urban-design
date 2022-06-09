<?php wp_redirect( esc_url( home_url( '/' ) ), 301 ); exit; ?>

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package eoc
 */

get_header();
?>

	<main id="primary" class="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );





		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
