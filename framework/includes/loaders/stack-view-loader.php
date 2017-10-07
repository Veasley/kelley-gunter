<?php
// This File Is responsible for Loading any custom Stack Views
//
// EX. Integrity, Ethos, etc
//
// FRAMEWORK/INCLUDES/LOADERS/STACK-VIEW-LOADER.php
//
// @uses built in X Custom Actions and Filters to load Views - https://community.theme.co/kb/customization/actions-and-filters-in-x/
// @read  best practices for Customization - https://community.theme.co/kb/customization-best-practices/
// ==========================================================================================================

/*
// Control the site header loads
// before the content begins
// @uses x_before_the_content_begin
// @location framework/views/ethos/header-( template part ),php
// =============================================================================

if ( ! function_exists( 'kg_get_headers' ) ){

		//Built in X Hook
		add_action( 'x_before_the_content_begin', 'kg_get_headers' );

		function kg_get_headers(){

			//If we are on the home page, get the home page header
			if ( is_front_page() ){

			 	x_get_view( 'ethos', '_header', 'home' );

			 //Otherwise load the inner-page header
			 }  elseif( is_page() ){

				 x_get_view( 'ethos', '_header', 'inner' );

			 } else{}

		}

}*/