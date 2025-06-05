<?php
register_post_type( 'app_member', [
	'labels' => [
		'name'               => __( 'Members', 'app' ),
		'singular_name'      => __( 'Member', 'app' ),
		'add_new'            => __( 'Add New', 'app' ),
		'add_new_item'       => __( 'Add new Member', 'app' ),
		'view_item'          => __( 'View Member', 'app' ),
		'edit_item'          => __( 'Edit Member', 'app' ),
		'new_item'           => __( 'New Member', 'app' ),
		'search_items'       => __( 'Search Members', 'app' ),
		'not_found'          => __( 'No Members found', 'app' ),
		'not_found_in_trash' => __( 'No Members found in trash', 'app' ),
	],
	'public'              => false,
	'exclude_from_search' => false,
	'show_ui'             => true,
	'show_in_rest'        => true,
	'capability_type'     => 'post',
	'hierarchical'        => false,
	'_edit_link'          => 'post.php?post=%d',
	'rewrite'             => [
		'slug'       => 'member',
		'with_front' => false,
	],
	'query_var' => true,
	'menu_icon' => 'dashicons-businessperson',
	'supports' => [ 'title', 'thumbnail', 'page-attributes' ],
] );