<?php
/**
 * Plugin Name: My custom scheme Admin Color Scheme
 * Description: A custom admin color scheme generated with <a href="http://themergency.com/generators/admin-color-scheme-generator" target="_blank">Admin Color Scheme Generator</a>
 * Author: maverick
 * Version: 1.0
 * Text Domain: my-custom-scheme-color-scheme
 * License: GPL2
 *
 * Copyright 2013 maverick
 */

class my_custom_scheme_Admin_Color_Scheme {

	function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'load_default_css') );
		add_action( 'admin_init', array( $this, 'add_color_scheme') );
	}

	/**
	 * Register the custom admin color scheme
	 *
	 * @TODO Implement RTL stylesheets
	 * @TODO Implement Icon colors
	 */
	function add_color_scheme() {
		wp_admin_css_color(
			'my-custom-scheme',
			__( 'My custom scheme', 'my-custom-scheme-color-scheme' ),
			plugins_url( 'my-custom-scheme.css', __FILE__ ),
			array( '#4c1dba', '#aa01a2', '#ef3737', '#320142' )
			//array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);
	}

	/**
	 * Make sure core's default `colors.css` gets enqueued, since we can't
	 * @import it from a plugin stylesheet. Also force-load the default colors
	 * on the profile screens, so the JS preview isn't broken-looking.
	 *
	 * Copied from Admin Color Schemes - http://wordpress.org/plugins/admin-color-schemes/
	 */
	function load_default_css() {

		global $wp_styles;

		$color_scheme = get_user_option( 'admin_color' );

		if ( 'my-custom-scheme' === $color_scheme || in_array( get_current_screen()->base, array( 'profile', 'profile-network' ) ) ) {
			$wp_styles->registered[ 'colors' ]->deps[] = 'colors-fresh';
		}

	}
}

new my-custom-scheme_Admin_Color_Scheme();