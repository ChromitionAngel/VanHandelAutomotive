<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );