<?php

/*************** MENU ***************/
add_action('init', 'register_menu');
function register_menu()
{
  register_nav_menus(array(
    'main-nav' => esc_html__('Menu Główne', 'kantier'),
    'footer-menu' => esc_html__('Menu Stopka', 'kantier'),
    'footer-bottom' => esc_html__('Menu Stopka - dolne', 'kantier'),
  ));
}
