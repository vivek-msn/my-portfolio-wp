<?php
/*
Plugin Name: SiteSEO Pro
Plugin URI: https://siteseo.io/
Description: This plugin handles On Page SEO, Content Analysis, Social Previews, Google Preview, Hyperlink Analysis, Image Analysis, Home Page Monitor, Schemas for various type of posts.
Author: Softaculous
Version: 1.1.4
Author URI: https://siteseo.io/
License: GPLv2
Text Domain: siteseo-pro
Domain Path: /languages
Requires Plugins: siteseo
*/

// We need the ABSPATH
if (!defined('ABSPATH')) exit;

if(!function_exists('add_action')){
	echo 'You are not allowed to access this page directly.';
	exit;
}

// If SITESEO_PRO_VERSION exists then the plugin is loaded already !
if(defined('SITESEO_PRO_VERSION')){
	return;
}

define('SITESEO_PRO_FILE', __FILE__);
define('SITESEO_PRO_VERSION', '1.1.4');
define('SITESEO_PRO_DIR', plugin_dir_path(SITESEO_PRO_FILE));
define('SITESEO_PRO_URL', plugin_dir_url(SITESEO_PRO_FILE));
define('SITESEO_PREMIUM', plugin_basename(__FILE__));

if(!defined('SITESEO_API')){
	define('SITESEO_API', 'https://api.siteseo.io/');
}

include_once SITESEO_PRO_DIR . 'functions.php';

function siteseopro_autoloader($class){

	if(!preg_match('/^SiteSEOPro\\\(.*)/is', $class, $m)){
		return;
	}
	
	$m[1] = str_replace('\\', '/', $m[1]);

	// Include file
	if(file_exists(SITESEO_PRO_DIR . 'main/'.strtolower($m[1]).'.php')){
		include_once(SITESEO_PRO_DIR.'main/'.strtolower($m[1]).'.php');
	}
}

spl_autoload_register('siteseopro_autoloader');

register_activation_hook( __FILE__, 'sitseopro_activate');
register_deactivation_hook( __FILE__, 'sitseopro_deactivate');
add_action('plugins_loaded', 'sitseopro_load_plugin');

// Prevent update of Siteseo free
// This also work for auto update
add_filter('site_transient_update_plugins', 'siteseo_pro_disable_manual_update_for_plugin', 20);
add_filter('pre_site_transient_update_plugins', 'siteseo_pro_disable_manual_update_for_plugin', 20);

// Auto update free version after update pro version
add_action('upgrader_process_complete', 'siteseo_pro_update_free_after_pro', 20, 2);


function sitseopro_activate(){
	update_option('siteseo_pro_version', SITESEO_PRO_VERSION);
}

function sitseopro_deactivate(){
	delete_option('siteseo_pro_version');
	delete_option('siteseo_pro_options');
	delete_option('siteseo_pro_page_speed');
	delete_option('siteseo_license');
}

// Check on update
function sitseopro_check_updates(){

	$current_version = get_option('siteseo_pro_version');
	$version = (int) str_replace('.', '', $current_version);

	// No update required
	if($current_version == SITESEO_PRO_VERSION){
		return true;
	}

	update_option('siteseo_pro_version', SITESEO_PRO_VERSION);
}

function sitseopro_load_plugin(){
	global $siteseo;

	if(empty($siteseo)){
		$siteseo = new StdClass();
	}

	$siteseo->pro = get_option('siteseo_pro_options', []);

	siteseo_pro_load_license();

	//check updates
	sitseopro_check_updates();

	// Check for updates
	include_once(SITESEO_PRO_DIR . 'main/plugin-update-checker.php');
	$siteseo_updater = SiteSEO_PucFactory::buildUpdateChecker(siteseo_pro_api_url().'/updates.php?version='.SITESEO_PRO_VERSION, SITESEO_PRO_FILE);
	
	// Add the license key to query arguments
	$siteseo_updater->addQueryArgFilter('siteseo_pro_updater_filter_args');
	
	// Show the text to install the license key
	add_filter('puc_manual_final_check_link-siteseo-pro', 'siteseo_pro_updater_check_link', 10, 1);
	
	if(defined('SITESEO_VERSION')){
		SiteSEO_PucFactory::buildUpdateChecker(siteseo_pro_api_url().'/updates.php?type=free&version='.SITESEO_VERSION, SITESEO_FILE);
	}

	if(wp_doing_ajax()){
		\SiteSEOPro\Ajax::hooks();
		return;
	}
	
	add_action('init', '\SiteSEOPro\Admin::local_business_block');

	if(is_admin()){
		\SiteSEOPro\Admin::init();
		return;
	}

	// Actions
	// TODO: Will need to shift these actions to a seperate file as the code grows.
	add_action('wp_head','\SiteSEOPro\Tags::dublin_core', 2);
	add_filter('siteseo_titles_noindex_bypass', '\SiteSEOPro\Tags::woocommerce');
	add_action('wp_head','\SiteSEOPro\Tags::easy_digital_downloads', 2);
	add_action('wp_head','\SiteSEOPro\Tags::structured_data');

}