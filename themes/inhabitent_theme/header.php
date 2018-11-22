<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */
//create code to give us a different header when we scroll down
//using an IF statement in PHP
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title>Inhabitent Camping Supply</title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php 
	// include('navi_function.php');
	wp_head(); ?> 
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

		
		<header id="masthead" class=<?php echo is_front_page() ? '"site-header reverse-header"' : "site-header" ?> >
			<div class="header-container">
				<div class="site-branding">
					<div class = "tent-logo">
						<a href=<?php echo home_url('/'); ?>>
							<h1 class="site-title">Inhabitent Camping Site </h1>
						</a>
					</div>
				</div><!-- .site-branding -->

				
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button> 
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							<div class ="search-form">
								<?php echo get_search_form();?>
							</div>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->


		<script>
		jQuery(function($) {

			var $nav = $('#masthead');
			var $win = $(window);
			var winH = $win.height(); // Get the window height.

		$win.on("scroll", function () {
			if ($(this).scrollTop() > winH ) {
				$nav.addClass("scroll-header");
			} else {
				$nav.removeClass("scroll-header");
			}
			}).on("resize", function(){ // If the user resizes the window
			winH = $(this).height(); // you'll need the new height value
			});
		});
		</script>

		<div id="content" class="site-content">
