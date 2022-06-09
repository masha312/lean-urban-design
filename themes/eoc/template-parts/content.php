<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eoc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php eoc_post_thumbnail(); ?>

	<div class="post__container">
		<header class="post__header">
			<?php
			$categories = wp_get_object_terms( $post->ID, 'category', [ 'parent' => 65 ] );

			if ( ! empty( $categories ) ) {
					$category_links = [];

					foreach ( $categories as $category ) {
							$category_links[] = '<a class="hide-underline category category--'.strtolower($category->name).'" href="' . esc_url( get_term_link( $category ) ) . '">' . $category->name . '</a>';
					}

					echo implode( ', ', $category_links );
			}

			?>
			<!-- <?php echo do_shortcode("[wp_ulike button_type='image']");?> -->


			<?php print_post_title() ?>

			<!-- <?php if (is_sticky()) :
				?>
				<div class="post__sticky">
					Weekly feature
				</div>
			<?php endif ?> -->

		</header><!-- .entry-header -->

	</div>

	<!-- <button class="post__button" type="button" data-quick-view>Show more <svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M9.70181 18.0104L15.7122 12L9.70181 5.98956L8.2876 7.40378L12.8838 12L8.2876 16.5962L9.70181 18.0104Z' fill='#0E54CC'/></svg></button> -->


	<button class="post__button" type="button" data-quick-view>Show more</button>


</article><!-- #post-<?php the_ID(); ?> -->
<div class="post__content fullwidth is-hidden" id="quickview-<?php the_ID(); ?>">
	<?php
	the_content(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'eoc' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			wp_kses_post( get_the_title() )
		)
	);

	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eoc' ),
			'after'  => '</div>',
		)
	);
	?>
		<div class="post__links">
		<?php
		print_indiebound_link();
		print_oku_link();
		?>
		</div>


</div><!-- .entry-content -->
