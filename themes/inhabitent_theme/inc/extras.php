<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// custom login for theme

function my_login_logo_one() { 
	?> 
	<style type="text/css"> 
	body.login div#login h1 a {
	background-image: url(http://localhost:8888/inhabitentsite/wp-content/themes/inhabitent_theme/assets/images/logos/inhabitent-logo-text-dark.svg);  //Add your own logo image in this url 
	height: 65px;
	width: 320px;
	background-size: 320px 65px;
	background-repeat: no-repeat;
	padding-bottom: 30px; 
	} 
	</style>
	<?php 
	} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );

	function allowAuthorEditing()
	{
	add_post_type_support( 'mytype', 'author' );
	}

	add_action('init','allowAuthorEditing');


	
/**
 * Register our sidebars and widgetized areas.
 *
 */
function footer_widget_init() {

	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer',
		// 'before_widget' => '<div>',
		// 'after_widget'  => '</div>',
		// 'before_title'  => '<h2 class="rounded">',
		// 'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'footer_widget_init' );

add_filter( 'getarchives_where', function ( $where )
{
    $where = str_replace( "post_type = 'post'", "post_type IN ( 'journal' )", $where );
    return $where;
});
