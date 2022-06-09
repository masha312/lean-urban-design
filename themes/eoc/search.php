<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package eoc
 */

get_header();
?>

	<main id="primary" class="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2>
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'eoc' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h2>
			</header><!-- .page-header -->

			<div class="broadsheet__resources appear">
			<?php

			// /* Start the Loop */

			while (have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;?></div>

			<div class="navigation">
			<div class="navigation__link navigation__link--previous "><?php previous_posts_link( "<svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M5.57544 12L11.5858 5.98956L13.0001 7.40378L8.40387 12L13.0001 16.5962L11.5858 18.0104L5.57544 12Z' fill='#0E54CC'/><path d='M11.0001 12L17.0105 5.98956L18.4247 7.40378L13.8285 12L18.4247 16.5962L17.0105 18.0104L11.0001 12Z' fill='#0E54CC'/></svg> Prev" ); ?></div>
			<div class="navigation__link navigation__link--next "><?php next_posts_link( "Next <svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M18.4247 12L12.4143 18.0104L11.0001 16.5962L15.5963 12L11.0001 7.40378L12.4143 5.98956L18.4247 12Z' fill='#0E54CC'/><path d='M13.0001 12L6.98965 18.0104L5.57544 16.5962L10.1716 12L5.57544 7.40378L6.98966 5.98956L13.0001 12Z' fill='#0E54CC'/></svg>"); ?></div>
			</div>

		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
