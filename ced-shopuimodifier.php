<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://cedcoss.com/
 * @since             1.0.0
 * @package           Ced_Shopuimodifier
 *
 * @wordpress-plugin
 * Plugin Name:       ced-shopUIModifier
 * Plugin URI:        https://cedcommerce.com/
 * Description:       This Plugin Does Changes to show Sold OUT Badges  When Stock not Available,Change Title 
 * 					   of Single Product Page, Change Checkout field Label  
 * Version:           1.0.0
 * Author:            Rajiv Ranjan Shrivastav
 * Author URI:        https://cedcoss.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ced-shopuimodifier
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('CED_SHOPUIMODIFIER_VERSION', '1.0.0');

//Defining Constant for Directory Path
define('PLUGIN_DIRPATH', plugin_dir_path(__FILE__));

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ced-shopuimodifier-activator.php
 */
function activate_ced_shopuimodifier() {
	require_once plugin_dir_path(__FILE__) . 'includes/class-ced-shopuimodifier-activator.php';
	Ced_Shopuimodifier_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ced-shopuimodifier-deactivator.php
 */
function deactivate_ced_shopuimodifier() {
	require_once plugin_dir_path(__FILE__) . 'includes/class-ced-shopuimodifier-deactivator.php';
	Ced_Shopuimodifier_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_ced_shopuimodifier');
register_deactivation_hook(__FILE__, 'deactivate_ced_shopuimodifier');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-ced-shopuimodifier.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ced_shopuimodifier() {

	$plugin = new Ced_Shopuimodifier();
	$plugin->run();
}
run_ced_shopuimodifier();
