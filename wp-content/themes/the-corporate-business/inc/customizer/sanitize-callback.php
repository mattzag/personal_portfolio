<?php 
/**
 * Sanitize select field
 *
 * @param  string $input   Selected input
 * @param  string $setting Input setting
 */
// function thehideout_sanitise_custom_option($input){
// 		return ($input === "No") ? "No" : "Yes";
// 	}

	function the_corporate_business_sanitise_custom_text($input){
		return filter_var($input, FILTER_SANITIZE_STRING);
	}

	function the_corporate_business_sanitise_custom_texttitle($inputtitle){
		return filter_var($inputtitle, FILTER_SANITIZE_STRING);
	}

	function the_corporate_business_sanitise_custom_url($input){
		return filter_var($input, FILTER_SANITIZE_URL);
	}

	function the_corporate_business_sanitize_switch( $input ) {
		if ( true === $input ) {
			return true;
		} else {
			return false;
		}
	}