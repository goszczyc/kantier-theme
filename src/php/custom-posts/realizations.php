<?php
// Register Custom Post Type
function wp_register_realizations_post_type()
{

	$labels = array(
		'name'                  => _x('Realizacje', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Realizacja', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Realizacje', 'text_domain'),
		'name_admin_bar'        => __('Realizacje', 'text_domain'),
		'archives'              => __('Archiwum realizacji', 'text_domain'),
		'attributes'            => __('Atrybuty realizacji', 'text_domain'),
		'parent_item_colon'     => __('Rodzic realizacji:', 'text_domain'),
		'all_items'             => __('Wszystkie realizacje', 'text_domain'),
		'add_new_item'          => __('Dodaj nową realizację', 'text_domain'),
		'add_new'               => __('Dodaj nową', 'text_domain'),
		'new_item'              => __('Nowa Realizacja', 'text_domain'),
		'edit_item'             => __('Edytuj realizację', 'text_domain'),
		'update_item'           => __('Zaktualizuj realizację', 'text_domain'),
		'view_item'             => __('Zobacz realizację', 'text_domain'),
		'view_items'            => __('Zobacz realizacje', 'text_domain'),
		'search_items'          => __('Szukaj realizacji', 'text_domain'),
		'not_found'             => __('Nie znaleziono', 'text_domain'),
		'not_found_in_trash'    => __('Nie znaleziono w koszu', 'text_domain'),
		'featured_image'        => __('Obrazek wyróżniający', 'text_domain'),
		'set_featured_image'    => __('Ustaw obrazek wyróżniający', 'text_domain'),
		'remove_featured_image' => __('Usuń obrazek wyróżniający', 'text_domain'),
		'use_featured_image'    => __('Użyj jako obrazek wyróżniający', 'text_domain'),
		'insert_into_item'      => __('Wstaw do realizacji', 'text_domain'),
		'uploaded_to_this_item' => __('Wyślij do tej realizacji', 'text_domain'),
		'items_list'            => __('Lista realizacji', 'text_domain'),
		'items_list_navigation' => __('Menu listy realizacji', 'text_domain'),
		'filter_items_list'     => __('Filtruj listę realizacji', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Realizacje', 'text_domain'),
		'description'           => __('Realizacje', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title','thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'             => 'dashicons-index-card',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite' => array('slug' => 'realizacje')
	);
	register_post_type('realizations', $args);
}
add_action('init', 'wp_register_realizations_post_type', 0);
