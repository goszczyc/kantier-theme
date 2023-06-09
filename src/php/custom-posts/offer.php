<?php
// Register Custom Post Type
function wp_register_offer_post_type() {

	$labels = array(
		'name'                  => _x( 'Oferta', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'oferta', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Oferta', 'text_domain' ),
		'name_admin_bar'        => __( 'Oferta', 'text_domain' ),
		'archives'              => __( 'Archiwum ofert', 'text_domain' ),
		'attributes'            => __( 'Atrybuty ofert', 'text_domain' ),
		'parent_item_colon'     => __( 'Rodzic oferty:', 'text_domain' ),
		'all_items'             => __( 'Wszystkie Oferty', 'text_domain' ),
		'add_new_item'          => __( 'Dodaj nową ofertę', 'text_domain' ),
		'add_new'               => __( 'Dodaj nową', 'text_domain' ),
		'new_item'              => __( 'Nowa oferta', 'text_domain' ),
		'edit_item'             => __( 'Edytuj ofertę', 'text_domain' ),
		'update_item'           => __( 'Zaktualizuj ofertę', 'text_domain' ),
		'view_item'             => __( 'Zobacz ofertę', 'text_domain' ),
		'view_items'            => __( 'Zobacz Ofertę', 'text_domain' ),
		'search_items'          => __( 'Szukaj oferty', 'text_domain' ),
		'not_found'             => __( 'Nie znaleziono', 'text_domain' ),
		'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'text_domain' ),
		'featured_image'        => __( 'Obrazek wyróżniający', 'text_domain' ),
		'set_featured_image'    => __( 'Ustaw obrazek wyróżniający', 'text_domain' ),
		'remove_featured_image' => __( 'Usuń obrazek wyróżniający', 'text_domain' ),
		'use_featured_image'    => __( 'Użyj jako obrazek wyróżniający', 'text_domain' ),
		'insert_into_item'      => __( 'Wstaw do oferty', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Wyślij do tej oferty', 'text_domain' ),
		'items_list'            => __( 'Lista ofert', 'text_domain' ),
		'items_list_navigation' => __( 'Menu listy ofert', 'text_domain' ),
		'filter_items_list'     => __( 'Filtruj listę ofert', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'oferta', 'text_domain' ),
		'description'           => __( 'Oferta', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
    	'menu_icon'             => 'dashicons-media-document',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    'rewrite' => array('slug' => 'oferta')
	);
	register_post_type( 'offer', $args );

}
add_action( 'init', 'wp_register_offer_post_type', 0 );