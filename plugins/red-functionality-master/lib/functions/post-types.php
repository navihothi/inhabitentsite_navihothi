<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 /*Plugin Name: Create Product Post Type
 Description: This plugin registers the 'product' post type.
 */

 /** PRODUCTS POST TYPE **/

function create_post_labels($label) {
    $labels = array(
        'name' => "$label",
        'singular_name' => "$label",
        'add_new' => "Add New $label",
        'add_new_item' => "Add New $label",
        'edit_item' => "Edit $label",
        'new_item' => "New $label",
        'all_items' => "All $label" . "s",
        'view_item' => "View $label",
        'search_items' => "Search $label" . "s",
        'not_found' =>  "No $label Found",
        'not_found_in_trash' => "No $label" . "s found in Trash", 
        'parent_item_colon' => '',
        'menu_name' => "$label" . "s",
    );
    return $labels; /* sends the array out of the function to use elsewhere*/ 
}
    
     function create_post_type() {
        //adventure post type
        register_post_type( 'Adventure', array(
            'labels' => create_post_labels("Adventure"),
            'has_archive' => true,
            'public' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes', 'author' ),
            'taxonomies' => array( 'post_tag', 'category' ),	
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'rewrite' => array( 'slug' => 'adventures' ),
            )
        );
        register_post_type( 'Journal', array(
            'labels' => create_post_labels("Journal"),
            'has_archive' => true,
            'public' => true,
            'supports' => array( 'title','author', 'comments', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
            'taxonomies' => array( 'post_tag', 'category' ),	
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'rewrite' => array( 'slug' => 'journals' ),
            )
        );
        register_post_type( 'Product', array(
            'labels' => create_post_labels("Product"),
            'has_archive' => true,
            'public' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
            'taxonomies' => array( 'post_tag', 'category' ),	
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'rewrite' => array( 'slug' => 'products' ),
            )
        );
}

    add_action( 'init', 'create_post_type');

?>