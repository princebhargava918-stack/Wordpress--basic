<?php 

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


	//Add Menu 
	function sports_betting_odds_menu() {
		
		add_submenu_page(         
			'edit.php?post_type=odds', 
			__( 'Document', 'sports-betting-odds' ),    
			__( 'Document', 'sports-betting-odds' ),   
			'manage_options',    
			'sports_betting_odds_document',   
			'sports_betting_odds_document'
		);
		
	}
	
	add_action('admin_menu', 'sports_betting_odds_menu');
		
?>