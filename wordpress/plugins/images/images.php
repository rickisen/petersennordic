<?php
/*
Plugin Name: Dykar Images
Plugin URI: http://rickisen.com
Description: Plugin for showing images
Author: rickisen
Version: 1.1
Author URI: http://rickisen.com
Tags: image
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function post_type_imageitem_init(){
	$labels = array(
        'name'                  => "Image Items",
        'singular_name'         => "Image Item",
        'menu_name'             => "Images",
        'name_admin_bar'        => "Image Items",
        'add_new'               => __( 'Add New', 'dykare' ),
        'add_new_item'          => __( 'Add New Image Item', 'dykare' ),
        'new_item'              => __( 'New Image Item', 'dykare' ),
        'edit_item'             => __( 'Edit Image Item', 'dykare' ),
        'view_item'             => __( 'View Image Item', 'dykare' ),
        'all_items'             => __( 'All Image Items', 'dykare' ),
        'search_items'          => __( 'Search Image Items', 'dykare' ),
        'parent_item_colon'     => __( 'Parent Page:', 'dykare' ),
        'not_found'             => __( 'No Image Item found.', 'dykare' ),
        'not_found_in_trash'    => __( 'No Image Item found in Trash.', 'dykare' ),
        'featured_image'        => _x( 'Image Item Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'dykare' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'dykare' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'dykare' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'dykare' ),
        'archives'              => _x( 'Image Item archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'dykare' ),
        'insert_into_item'      => 'Insert into Image Item',
        'uploaded_to_this_item' => _x( 'Uploaded to this Image Item', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'dykare' ),
        'filter_items_list'     => _x( 'Filter Image Item list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'dykare' ),
        'items_list_navigation' => _x( 'Image Item list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'dykare' ),
        'items_list'            => _x( 'Image Item list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'dykare' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'image' ),
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail')
    );
	register_post_type('image', $args);
}
add_action('init', 'post_type_imageitem_init');
