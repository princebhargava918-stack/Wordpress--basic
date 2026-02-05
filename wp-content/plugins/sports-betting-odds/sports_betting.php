<?php
/*
Plugin Name: Sports Betting Odds 
Plugin URI: https://www.flytonic.com
Description: Sports Betting Odds WordPress 
Version: 1.04
Author: Flytonic
Author URI:https://www.flytonic.com/
License:GPLv2
Text Domain: sports-betting-odds
Domain Path: /languages
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

	define('SPORTS_BETTING_ODDS_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );	
	
add_action('plugins_loaded', 'sports_betting_odds_text_domain');
function sports_betting_odds_text_domain() {	
	load_plugin_textdomain( 'sports-betting-odds', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}

//---Plugin Setup

require_once( plugin_dir_path(__FILE__) . 'includes/odds-plugin-setup.php');

//---Manual Shortcode

require_once( plugin_dir_path(__FILE__) . 'includes/shortcodes/manual-odds-shortcode.php');

//---Odds Meta

require_once( plugin_dir_path(__FILE__) . 'includes/odds_meta.php');

//---Odds Document  

require_once( plugin_dir_path(__FILE__) . 'includes/odds_document.php');

//---Add Options Page

require_once( plugin_dir_path(__FILE__) . 'includes/odds_options_page.php');

class sports_betting_odds_configuration {
	
	//create custom post type
	
    function __construct() {
		add_action( 'init', array( $this, 'sports_betting_odds_custom_post_type' ) );
		add_action( 'add_meta_boxes', array($this, 'sports_betting_odds_add_meta_box'));
    }
	
	function sports_betting_odds_add_meta_box() { 
		add_meta_box('odds_meta', __('Odds Options','sports-betting-odds'), 'sports_betting_odds_post_meta_fields', 'odds', 'advanced', "low");
	}
	
	function sports_betting_odds_custom_post_type() {
		
			$labels = array(
				'name'                => _x( 'Manual Betting Odds','sports-betting-odds' ),
				'singular_name'       => _x( 'Manual Betting Odds','sports-betting-odds' ),
				'menu_name'           => __( 'Manual Odds', 'sports-betting-odds' ),
				'name_admin_bar'      => __( 'Odds', 'sports-betting-odds' ),
				'parent_item_colon'   => __( 'Parent Item:', 'sports-betting-odds' ),
				'all_items'           => __( 'All Odds', 'sports-betting-odds' ),
				'add_new_item'        => __( 'Add New Odds', 'sports-betting-odds' ),
				'add_new'             => __( 'Add New Odds', 'sports-betting-odds' ),
				'new_item'            => __( 'New Odds', 'sports-betting-odds' ),
				'edit_item'           => __( 'Edit Odds', 'sports-betting-odds' ),
				'update_item'         => __( 'Update Odds', 'sports-betting-odds' ),
				'view_item'           => __( 'View Odds', 'sports-betting-odds' ),
				'search_items'        => __( 'Search Odds', 'sports-betting-odds' ),
				'not_found'           => __( 'Not found', 'sports-betting-odds' ),
				'not_found_in_trash'  => __( 'Not found in Trash', 'sports-betting-odds' ),
			);
			
			$args = array(
				'label'               => __( 'Odds', 'sports-betting-odds' ),
				'labels'              => $labels,
				'supports'            => array('title','thumbnail'),
				'hierarchical'        => false,
				'public'              => false,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'menu_position'       => 8,
				'show_in_admin_bar'   => false,
				'show_in_nav_menus'   => false,
				'can_export'          => true,
				'has_archive'         => false,		
				'exclude_from_search' => true,
				'publicly_queryable'  => false,
				'rewrite'             => false,
				'capability_type'     => 'page',
			);
			
			register_post_type( 'odds', $args );

			if ( function_exists( 'add_image_size' ) ) { 
			   add_image_size( 'odds-logo', 150, 50, false ); 
			}

    }

}

new sports_betting_odds_configuration();