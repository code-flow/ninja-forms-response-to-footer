<?php
/*
Plugin Name: Ninja Forms Message to Footer
Description: Moves the error messages to the footer
Version: 0.1
*/

add_action('wp_head', function(){
	remove_action( 'ninja_forms_display_before_form', 'ninja_forms_display_response_message', 10 );
	add_action( 'ninja_forms_display_after_form', 'ninja_forms_display_response_message', 10 );	
});
