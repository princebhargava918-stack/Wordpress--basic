<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//---------------------Add Scripts----------------------

function sports_betting_odds_initial_script() { 
	wp_enqueue_style('sports-betting-odds-css', SPORTS_BETTING_ODDS_PLUGIN_PATH.'assets/css/odds_style.css');
}
add_action('wp_enqueue_scripts', 'sports_betting_odds_initial_script',15);

//Add Columns to Odds Post Type

function sports_betting_odds_columns_add($columns){
  @$columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "title" => __( 'Title' , 'sports-betting-odds'),
	"sc" => __( 'Site Id' , 'sports-betting-odds'),
	"date" => __( 'Post Date' , 'sports-betting-odds'),
  );
  return @$columns;
}

//Add Columns to Odds Post Type
function sports_betting_odds_edit_columns($column){
  global $post;
  switch ($column) {
	  case 'sc':
      echo @$post->ID;
      break;
  }
}

add_action("manage_odds_posts_columns",  "sports_betting_odds_columns_add");

add_filter("manage_odds_posts_custom_column", "sports_betting_odds_edit_columns");

?>