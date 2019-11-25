<?php
/**
 * Plugin Name: SBGD Wrapper Block
 * Plugin URI: https://github.com/ahmadawais/create-guten-block/
 * Description: Adds a Gutenberg wrapper block that creates an unstyled container. Created using 'Create Gutenberg Block' template.
 * Author: Shawn Beelman Graphic Design
 * Author URI: https://shawnbeelman.com/
 * Version: 1.1.6
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
