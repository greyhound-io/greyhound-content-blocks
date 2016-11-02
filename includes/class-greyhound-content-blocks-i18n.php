<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://greyhound.io/
 * @since      1.0.0
 *
 * @package    Greyhound_Content_Blocks
 * @subpackage Greyhound_Content_Blocks/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Greyhound_Content_Blocks
 * @subpackage Greyhound_Content_Blocks/includes
 * @author     Matthew Woodward <mwdwrd@gmail.com>
 */
class Greyhound_Content_Blocks_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'greyhound-content-blocks',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
