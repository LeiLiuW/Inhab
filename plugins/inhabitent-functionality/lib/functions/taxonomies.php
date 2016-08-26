<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function inhabitent_register_product_type_tax() {

	$labels = array(
		'name'                       => _x( 'Product Types', 'Taxonomy General Name', 'text_domai' ),
		'singular_name'              => _x( 'Product Type', 'Taxonomy Singular Name', 'text_domai' ),
		'menu_name'                  => __( 'Product Type', 'text_domai' ),
		'all_items'                  => __( 'All Product Types', 'text_domai' ),
		'parent_item'                => __( 'Parent Product Type', 'text_domai' ),
		'parent_item_colon'          => __( 'Parent Product Type:', 'text_domai' ),
		'new_item_name'              => __( 'New Product Type Name', 'text_domai' ),
		'add_new_item'               => __( 'Add New Product Type', 'text_domai' ),
		'edit_item'                  => __( 'Edit Product Type', 'text_domai' ),
		'update_item'                => __( 'Update Product Type', 'text_domai' ),
		'view_item'                  => __( 'View Product Type', 'text_domai' ),
		'separate_items_with_commas' => __( 'Separate Product Types with commas', 'text_domai' ),
		'add_or_remove_items'        => __( 'Add or remove Product Types', 'text_domai' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domai' ),
		'popular_items'              => __( 'Popular Product Types', 'text_domai' ),
		'search_items'               => __( 'Search Product Types', 'text_domai' ),
		'not_found'                  => __( 'Not Found', 'text_domai' ),
		'no_terms'                   => __( 'No Product Types', 'text_domai' ),
		'items_list'                 => __( 'Product Types list', 'text_domai' ),
		'items_list_navigation'      => __( 'Product Types list navigation', 'text_domai' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'product_type', array( 'product' ), $args );

}
add_action( 'init', 'inhabitent_register_product_type_tax', 0 );
