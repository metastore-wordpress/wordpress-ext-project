<?php
/**
 * Plugin Name:     (WP-EXT) Project
 * Plugin URI:      https://metastore.pro/
 *
 * Description:     Project post type and more.
 *
 * Author:          Kitsune Solar
 * Author URI:      https://kitsune.solar/
 *
 * Version:         1.0.0
 *
 * Text Domain:     wp-ext-project
 * Domain Path:     /languages
 *
 * License:         GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Loading `WP_EXT_Project`.
 */

function run_wp_ext_project() {
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Project.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Project_Post_Type.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Project_Post_Field.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Project_Taxonomy.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Project_User_Role.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Project_Theme.class.php' );
//  require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Project_Template.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Project_ShortCode.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Project_Widget.class.php' );
}

run_wp_ext_project();
