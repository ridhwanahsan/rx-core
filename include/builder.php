<?php
// Register Header Post Type
function rx_register_header_post_type() {
	$labels = array(
		'name'               => 'Headers',
		'singular_name'      => 'Header',
		'menu_name'          => 'Headers',
		'add_new'           => 'Add New Header',
		'add_new_item'      => 'Add New Header',
		'edit_item'         => 'Edit Header',
		'new_item'          => 'New Header',
		'view_item'         => 'View Header',
		'search_items'      => 'Search Headers',
		'not_found'         => 'No headers found',
		'not_found_in_trash'=> 'No headers found in trash'
	);

	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'has_archive'         => false,
		'publicly_queryable'  => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'rx-header'),
		'capability_type'    =>
		'post',
		'supports'            => array('title', 'editor', 'thumbnail'),
		'menu_icon'          => 'dashicons-welcome-widgets-menus'
		);
		register_post_type('rx-header', $args);

		// Register Footer Post Type
		$footer_labels = array(
			'name'               => 'Footers',
			'singular_name'      => 'Footer',
			'menu_name'          => 'Footers',
			'add_new'           => 'Add New Footer',
			'add_new_item'      => 'Add New Footer',
			'edit_item'         => 'Edit Footer',
			'new_item'          => 'New Footer',
			'view_item'         => 'View Footer',
			'search_items'      => 'Search Footers',
			'not_found'         => 'No footers found',
			'not_found_in_trash'=> 'No footers found in trash'
		);

		$footer_args = array(
			'labels'              => $footer_labels,
			'public'              => true,
			'has_archive'         => false,
			'publicly_queryable'  => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array('slug' => 'rx-footer'),
			'capability_type'    => 'post',
			'supports'            => array('title', 'editor', 'thumbnail'),
			'menu_icon'          => 'dashicons-welcome-widgets-menus'
		);
		register_post_type('rx-footer', $footer_args);
		}
		add_action('init', 'rx_register_header_post_type');