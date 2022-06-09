<?php
/**
 * Template Name: Landing
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eoc
 */

get_header();
?>

	<main id="primary" class="main main--landing">
		<div class="landing__section landing__section--type">
		<h2 class="content__title">Explore by type</h2>
		<ul class="landing__list">
			<?php wp_list_categories( array(
				'orderby'    => 'name',
				'show_count' => true,
				'title_li' => '',
				'child_of' => 65,
		) ); ?>
		</div>

		<div class="landing__section landing__section--topic">
			<h2 class="content__title">Explore by topic</h2>
			<ul class="landing__list">
				<?php wp_list_categories( array(
					'orderby'    => 'name',
					'show_count' => true,
					'title_li' => '',
					'child_of' => 66,
			) ); ?>

			</ul>
		</div>

		<div class="landing__section landing__section--recents">
			<div class="landing__header">
				<h2 class="content__title">Recently added</h2>
				<a href="<?php echo esc_url( home_url( '/resources' ) ); ?>">See all <?php echo wpb_total_posts()?></a>
			</div>
			<div class="landing__list">
		    <?php
		    $recent_posts = wp_get_recent_posts(array(
		        'numberposts' => 9, // Number of recent posts thumbnails to display
		        'post_status' => 'publish' // Show only the published posts
		    ));

		    foreach( $recent_posts as $post_item ) : ?>

								<?php $external_link = get_post_meta($post_item['ID'], 'external_link', true); ?>

								<a class="recents__item hide-underline" target="_blank" href="<?php echo $external_link?>">
		                <?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>

		            </a>

		    <?php endforeach; ?>

				<div class="recents__link"><a href="<?php echo esc_url( home_url( '/resources' ) ); ?>">See all <?php echo wpb_total_posts()?></a></div>
				</div>
		</div>

		<div class="landing__section--tags">
			<h2 class="content__title">Top Tags</h2>
			<ul>
			<?php
			$tags = get_tags(array(
			 'orderby' => 'count',
			 'order'   => 'DESC',
			 'number'  => 50,
			 'include' => $term_ids,
		 ));
			 if ( $tags ) :
					 foreach ( $tags as $tag ) : ?>
							 <li><a class="link--text" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
					 <?php endforeach; ?>
			 <?php endif; ?>
			</ul>
		</div>
	</main><!-- #main -->

<?php
get_footer();
