<?php
/*
Plugin Name: Dykar Puffar
Plugin URI: http://rickisen.com
Description: Plugin for showing 3 puffs on the fp
Author: rickisen
Version: 1.1
Author URI: http://rickisen.com
Tags: puff
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function post_type_puffitem_init(){
	$labels = array(
        'name'                  => "Puff Items",
        'singular_name'         => "Puff Item",
        'menu_name'             => "Puffar",
        'name_admin_bar'        => "Puff Items",
        'add_new'               => __( 'Add New', 'dykare' ),
        'add_new_item'          => __( 'Add New Puff Item', 'dykare' ),
        'new_item'              => __( 'New Puff Item', 'dykare' ),
        'edit_item'             => __( 'Edit Puff Item', 'dykare' ),
        'view_item'             => __( 'View Puff Item', 'dykare' ),
        'all_items'             => __( 'All Puff Items', 'dykare' ),
        'search_items'          => __( 'Search Puff Items', 'dykare' ),
        'parent_item_colon'     => __( 'Parent Page:', 'dykare' ),
        'not_found'             => __( 'No Puff Item found.', 'dykare' ),
        'not_found_in_trash'    => __( 'No Puff Item found in Trash.', 'dykare' ),
        'featured_image'        => _x( 'Puff Item Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'dykare' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'dykare' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'dykare' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'dykare' ),
        'archives'              => _x( 'Puff Item archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'dykare' ),
        'insert_into_item'      => 'Insert into Puff Item',
        'uploaded_to_this_item' => _x( 'Uploaded to this Puff Item', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'dykare' ),
        'filter_items_list'     => _x( 'Filter Puff Item list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'dykare' ),
        'items_list_navigation' => _x( 'Puff Item list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'dykare' ),
        'items_list'            => _x( 'Puff Item list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'dykare' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'puff' ),
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail')
    );
	register_post_type('puff', $args);
}
add_action('init', 'post_type_puffitem_init');
