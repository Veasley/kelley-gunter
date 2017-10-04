<?php
// Put any helper functions for the theme here, however
// please consider putting custom functions in a custom site plugin.
// ===================================================

/*========================================================
// CUSTOM LOGIN LOGO
// Switching out Wordpress logo to our own logo
========================================================*/

/*function custom_login_logo() {
	
    echo '<style type="text/css">
    
    	body.login {
			background-color: #000 !important;
		}

        h1 a { 
        	background-image:url(/images/logo.jpg) !important; 
          	background-size: 85%;
			width: 100%;
			height: 112px;
			background-position: center center;
        }
    </style>';
}

add_action('login_head', 'custom_login_logo');*/


/*========================================================
// ACF OPTIONS PAGE
// Adding Advance Custom Fields OPTIONS page
//source(https://www.advancedcustomfields.com/resources/options-page/)
========================================================*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}