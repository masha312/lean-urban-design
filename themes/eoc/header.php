<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eoc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-FZ6H4ZK6ZL"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-FZ6H4ZK6ZL');
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site broadsheet">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'eoc' ); ?></a>

	<header id="masthead" class="header broadsheet__sidebar appear">
	<div class="header__subheader">
				<h1 class="header__title">
					<?php if ( is_front_page() ) :
						?>
						uban design resources<?php
					else :
						?>
						<a class="link--text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">urban design resources</a>
						<?php
					endif;?>

				</h1>
				<div class="search--form">
					<?php get_search_form(); ?>
				</div>

		<div class="accordion accordion--search">
			<button data-id="1" id="accordion-toggle-1" aria-controls="accordion-content-1" aria-expanded="false" class="accordion__toggle">Explore<svg class="accordion__icon" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.70181 13.0104L7.71222 6.99997L1.70181 0.989563L0.2876 2.40378L4.88379 6.99997L0.287598 11.5962L1.70181 13.0104Z" fill="#a6a6a6"/>
				</svg>
			</button>
			<div class="accordion__content" id="accordion-content-1" aria-labelledby="accordion-toggle-1">

			<div class="accordion--categories">
				<div class="content__title">topic</div>
				<ul>
					<?php wp_list_categories( array(
		        'orderby'    => 'name',
		        'show_count' => true,
						'title_li' => '',
						'child_of' => 66,
		    ) ); ?>

				</ul>
				<div class="content__title">type</div>
				<ul>
					<?php wp_list_categories( array(
		        'orderby'    => 'name',
		        'show_count' => true,
						'title_li' => '',
						'child_of' => 65,
		    ) ); ?>

				</ul>
			</div>


			</div>
		</div>

		<div class="accordion accordion--tags">
			<button data-id="2" id="accordion-toggle-2" aria-controls="accordion-content-2" aria-expanded="false" class="accordion__toggle">Tags<svg class="accordion__icon" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1.70181 13.0104L7.71222 6.99997L1.70181 0.989563L0.2876 2.40378L4.88379 6.99997L0.287598 11.5962L1.70181 13.0104Z" fill="#a6a6a6"/>
			</svg></button>
			<div class="accordion__content" id="accordion-content-2" aria-labelledby="accordion-toggle-2">
				<ul>
				<?php
				 $tags = get_tags();
				 if ( $tags ) :
						 foreach ( $tags as $tag ) : ?>
								 <li><a class="link--text" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
						 <?php endforeach; ?>
				 <?php endif; ?>
			 	</ul>
			</div>

		</div>

		<div class="accordion">
			<button data-id="3" id="accordion-toggle-3" aria-controls="accordion-content-3" aria-expanded="false" class="accordion__toggle">Get in touch<svg class="accordion__icon" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1.70181 13.0104L7.71222 6.99997L1.70181 0.989563L0.2876 2.40378L4.88379 6.99997L0.287598 11.5962L1.70181 13.0104Z" fill="#a6a6a6"/>
			</svg></button>
				<div class="accordion__content" id="accordion-content-3" aria-labelledby="accordion-toggle-3">
					<p><svg class="icon--ig" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M11.999 7.377C9.44495 7.377 7.37595 9.447 7.37595 12C7.37595 14.554 9.44495 16.624 11.999 16.624C14.551 16.624 16.622 14.554 16.622 12C16.622 9.447 14.551 7.377 11.999 7.377ZM11.999 15.004C10.34 15.004 8.99495 13.659 8.99495 12.001C8.99495 10.342 10.34 8.998 11.999 8.998C13.658 8.998 15.001 10.342 15.001 12.001C15.001 13.659 13.658 15.004 11.999 15.004Z" fill="currentColor"/>
				<path d="M16.806 8.285C17.4013 8.285 17.884 7.80237 17.884 7.207C17.884 6.61164 17.4013 6.129 16.806 6.129C16.2106 6.129 15.728 6.61164 15.728 7.207C15.728 7.80237 16.2106 8.285 16.806 8.285Z" fill="currentColor"/>
				<path d="M20.533 6.111C20.064 4.902 19.109 3.946 17.9 3.479C17.201 3.216 16.462 3.075 15.714 3.059C14.751 3.017 14.446 3.005 12.004 3.005C9.56195 3.005 9.24895 3.005 8.29395 3.059C7.54795 3.074 6.80895 3.215 6.10995 3.479C4.89995 3.946 3.94495 4.902 3.47695 6.111C3.21395 6.811 3.07295 7.549 3.05795 8.297C3.01495 9.259 3.00195 9.564 3.00195 12.007C3.00195 14.449 3.00195 14.76 3.05795 15.717C3.07295 16.465 3.21395 17.203 3.47695 17.904C3.94595 19.112 4.90095 20.068 6.11095 20.536C6.80695 20.808 7.54595 20.962 8.29595 20.986C9.25895 21.028 9.56395 21.041 12.006 21.041C14.448 21.041 14.761 21.041 15.716 20.986C16.463 20.971 17.202 20.829 17.902 20.567C19.111 20.098 20.066 19.143 20.535 17.934C20.798 17.234 20.939 16.496 20.954 15.748C20.997 14.786 21.01 14.481 21.01 12.038C21.01 9.59501 21.01 9.285 20.954 8.328C20.941 7.57 20.801 6.819 20.533 6.111ZM19.315 15.643C19.308 16.219 19.204 16.79 19.004 17.331C18.699 18.118 18.078 18.74 17.292 19.042C16.757 19.241 16.193 19.345 15.622 19.353C14.672 19.397 14.404 19.408 11.968 19.408C9.52995 19.408 9.28095 19.408 8.31295 19.353C7.74395 19.346 7.17795 19.241 6.64395 19.042C5.85495 18.741 5.22995 18.119 4.92495 17.331C4.72895 16.797 4.62295 16.232 4.61395 15.662C4.57095 14.712 4.56095 14.444 4.56095 12.008C4.56095 9.571 4.56095 9.322 4.61395 8.353C4.62095 7.777 4.72495 7.207 4.92495 6.666C5.22995 5.877 5.85495 5.256 6.64395 4.954C7.17795 4.756 7.74395 4.651 8.31295 4.643C9.26395 4.6 9.53095 4.588 11.968 4.588C14.405 4.588 14.655 4.588 15.622 4.643C16.193 4.65 16.757 4.755 17.292 4.954C18.078 5.257 18.699 5.879 19.004 6.666C19.2 7.2 19.306 7.765 19.315 8.335C19.358 9.28601 19.369 9.553 19.369 11.99C19.369 14.426 19.369 14.688 19.326 15.644H19.315V15.643Z" fill="currentColor"/>
			</svg>Reach out on <a class="link--text" href="https://instagram.com/inspiredflaneur" target="_blank">Instagram</a> to suggest your resources, give website feedback, and any other things.</p>
			</div>

		</div>

		<div class="accordion">
			<button data-id="4" id="accordion-toggle-4" aria-controls="accordion-content-4" aria-expanded="false" class="accordion__toggle">About<svg class="accordion__icon" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1.70181 13.0104L7.71222 6.99997L1.70181 0.989563L0.2876 2.40378L4.88379 6.99997L0.287598 11.5962L1.70181 13.0104Z" fill="#a6a6a6"/>
			</svg></button>
				<div class="accordion__content" id="accordion-content-4" aria-labelledby="accordion-toggle-4">
					<p>made by <a class="link--text" target="_blank" href="https://mash.haus">masha</a>
					<br/>icons from <a class="link--text" target="_blank" href="https://phosphoricons.com//">phosphor</a></p>
				</div>
		</div>
		<!-- <iframe src="https://flaneuring.substack.com/embed" width="480" frameborder="0" scrolling="no"></iframe> -->
	</header><!-- #masthead -->
