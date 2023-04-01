<?php
if (function_exists('acf_add_options_page')) {
	$parent = acf_add_options_page(array(
		'page_title'  => 'Pola powtarzalne',
		'menu_title'  => 'Pola powtarzalne',
		'menu_slug'   => 'repeat',
		'capability'  => 'edit_posts',
		'redirect'    => true
	));
	$header = acf_add_options_sub_page(
		array(
			'page_title' => 'Header',
			'menu_title' => 'Header',
			'parent_slug' => 'repeat'
		)
	);
	$logo_slider = acf_add_options_sub_page(
		array(
			'page_title' => 'Logotypy firm',
			'menu_title' => 'Logotypy firm',
			'parent_slug' => 'repeat'
		)
	);
	$footer = acf_add_options_sub_page(
		array(
			'page_title' => 'Stopka',
			'menu_title' => 'Stopka',
			'parent_slug' => 'repeat'
		)
	);
	$repeating = acf_add_options_sub_page(
		array(
			'page_title' => 'Elementy powtarzalne',
			'menu_title' => 'Elementy powtarzalne',
			'parent_slug' => 'repeat'
		)
	);
}
