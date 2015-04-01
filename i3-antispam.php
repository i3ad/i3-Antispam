<?php
/**
 * Plugin Name: i3 Antispam
 * Plugin URI: -
 * Description: A shortcode to insert mailadresses via the WP antispambot function.
 * Version: 1.0.0
 * Author: Mo
 * Author URI: -
 * License: GPL2
 *
 * Usage:
 * [email]john.doe@mysite.com[/email]
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Hide email from Spam Bots using a shortcode.
 */
function i3_hide_email_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'link' => 'true',
		), $atts )
	);
	
	// Code
	if ( ! is_email( $content ) ) { // If content is not mailadress return nothing
		return;

	} elseif ( $link == 'false') { // If "link" is set to "false", display no link
		return antispambot( $content );
		
	} else { // Display the mailto link
		return '<a href="mailto:' . antispambot( $content ) . '">' . antispambot( $content ) . '</a>';
	}
	
}
add_shortcode( 'email', 'i3_hide_email_shortcode' );