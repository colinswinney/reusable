<?php

/*
Plugin Name: Testimonials Custom Post Type
Plugin URI: https://colinswinney.com
Description: Testimonials Custom Post Type
Author: Colin Swinney
Version: 1.0
Author URI: https://colinswinney.com
*/

function testimonial_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'cs' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'cs' ),
		'menu_name'             => __( 'Testimonials', 'cs' ),
		'name_admin_bar'        => __( 'Testimonials', 'cs' ),
		'archives'              => __( 'Testimonial Archives', 'cs' ),
		'attributes'            => __( 'Testimonial Attributes', 'cs' ),
		'parent_item_colon'     => __( 'Parent Testimonial:', 'cs' ),
		'all_items'             => __( 'All Testimonials', 'cs' ),
		'add_new_item'          => __( 'Add New Testimonial', 'cs' ),
		'add_new'               => __( 'Add New', 'cs' ),
		'new_item'              => __( 'New Testimonial', 'cs' ),
		'edit_item'             => __( 'Edit Testimonial', 'cs' ),
		'update_item'           => __( 'Update Testimonial', 'cs' ),
		'view_item'             => __( 'View Testimonial', 'cs' ),
		'view_items'            => __( 'View Testimonials', 'cs' ),
		'search_items'          => __( 'Search Testimonial', 'cs' ),
		'not_found'             => __( 'Not found', 'cs' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'cs' ),
		'featured_image'        => __( 'Featured Image', 'cs' ),
		'set_featured_image'    => __( 'Set featured image', 'cs' ),
		'remove_featured_image' => __( 'Remove featured image', 'cs' ),
		'use_featured_image'    => __( 'Use as featured image', 'cs' ),
		'insert_into_item'      => __( 'Insert into Testimonial', 'cs' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'cs' ),
		'items_list'            => __( 'Testimonials list', 'cs' ),
		'items_list_nacsation' => __( 'Testimonials list nacsation', 'cs' ),
		'filter_items_list'     => __( 'Filter Testimonial list', 'cs' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'cs' ),
		'description'           => __( 'Testimonials Post Type', 'cs' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'testimonial_post_type', 0 );

?>