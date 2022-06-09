<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eoc
 */

?>

<section class="no-results not-found appear">
	<header class="page-header">
		<h2><?php esc_html_e( 'Nothing Found', 'eoc' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
			<p>Sorry, we couldn't find anything for "<?php the_search_query(); ?>" :(</p>
			<p>Maybe try again with different search terms?</p>

				<?php get_search_form(); ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->
