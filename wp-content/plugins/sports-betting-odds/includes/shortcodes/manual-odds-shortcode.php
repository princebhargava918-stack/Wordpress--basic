<?php 

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Manual Odds Shortcode

function sports_betting_odds_manual_shortcode($atts) {
	
	extract(shortcode_atts(array(
		'site1' => '',		
		'site2' => '',		
		'site3' => '',		
		'site4' => '',		
		'site5' => '',		
		'site6' => '',		
		'site7' => '',		
		'site8' => '',		
		'site9' => '',		
		'site10' => '',
	), $atts));
	
	$sites = array ($site1,$site2,$site3,$site4,$site5,$site6,$site7,$site8,$site9,$site10);
	
	$html = '';
	
	global $post;
	
	$html='<table class="last_table"><thead><tr class="first_heading"><th>'.__('Bookmakers', 'sports-betting-odds').'</th><th>'.__('Teams', 'sports-betting-odds').'</th><th>'.__('H2H', 'sports-betting-odds').'</th><th colspan="2">'.__('Spread', 'sports-betting-odds').'</th><th colspan="2">'.__('Total', 'sports-betting-odds').'</th></tr><tr class="second_heading"><th></th><th></th><th>'.__('Mny Ln', 'sports-betting-odds').'</th><th class="price">'.__('Prc', 'sports-betting-odds').'</th><th class="point">'.__('Pts', 'sports-betting-odds').'</th><th class="price">'.__('Prc', 'sports-betting-odds').'</th><th class="point">'.__('Pts', 'sports-betting-odds').'</th></tr></thead>';
	
	foreach ($sites as $custom) {
		
		if ($custom !='') {
			
			$html .='<tbody><tr>';
			
			$html .='<td class="bookmaker_logo"><a title="'.esc_attr(get_the_title($custom)).'" href="';
			
			if(!empty(get_post_meta($custom, 'oddsAffiliatUrl', true))){
				
				$html .= esc_url(get_post_meta($custom, 'oddsAffiliatUrl', true));
				
			}else{
				
				$html .='';
				
			}
			
			$html .='">';
			
			if(has_post_thumbnail( $custom )){
				
				$html .= '<img src="'.esc_url(wp_get_attachment_image_src( get_post_thumbnail_id($custom), 'odds-logo', true )[0]).'" width="130" height="30" />';
				
			}else{
				
				$html .= '<img src="'.esc_url(WP_PLUGIN_URL).'/sports-betting-odds/assets/images/bookmaker.png" width="130" height="30" />';
				
			}
			
			$html .='</a></td><td>';
			
			if(!empty(get_post_meta($custom, 'firstTeamName', true))){
				
				$html .= esc_attr(get_post_meta($custom, 'firstTeamName', true));
				
			}else{
				
				$html .= '';
				
			}
			
			$html .='</td><td>';						
			
			if(!empty(get_post_meta($custom, 'firstH2H', true))){ 							
			
				$html .= esc_attr(get_post_meta($custom, 'firstH2H', true)); 						
			
			}else{								
			
				$html .= '';							
			
			}			
			$html .='</td><td>';
			
			if(!empty(get_post_meta($custom, 'firstSpreadPrice', true))){ 							
			
				$html .= esc_attr(get_post_meta($custom, 'firstSpreadPrice', true)); 						
			
			}else{								
			
				$html .= '';							
			
			}
			
			$html .='</td><td>';
			
			if(!empty(get_post_meta($custom, 'firstSpreadPoint', true))){ 							
			
				$html .= esc_attr(get_post_meta($custom, 'firstSpreadPoint', true)); 						
			
			}else{								
			
				$html .= '';							
			}
			
			$html .='</td><td>';
			
			if(!empty(get_post_meta($custom, 'firstTotalPrice', true))){ 							
			
				$html .= esc_attr(get_post_meta($custom, 'firstTotalPrice', true)); 						
			
			}else{								
			
				$html .= '';							
			
			}
			
			$html .='</td><td>';
			
			if(!empty(get_post_meta($custom, 'firstTotalPoint', true))){ 							
			
				$html .= esc_attr(get_post_meta($custom, 'firstTotalPoint', true)); 						
			
			}else{								
			
				$html .= '';							
			
			}
			$html .='</td></tr><tr><td><a title="'.get_the_title($custom).'" href="';
			
			if(!empty(get_post_meta($custom, 'oddsAffiliatUrl', true))){	
			
				$html .= esc_url(get_post_meta($custom, 'oddsAffiliatUrl', true));
			
			}else{		
			
				$html .='';			
			
			}
			
			$html .='" class="bet_now">'.__('Bet Now', 'sports-betting-odds').'</a></td><td>';
			
			if(!empty(get_post_meta($custom, 'secondTeamName', true))){
				
				$html .= esc_attr(get_post_meta($custom, 'secondTeamName', true));
				
			}else{
				
				$html .= '';
				
			}
			
			$html .='</td><td>';
			
			if(!empty(get_post_meta($custom, 'secondH2H', true))){				
			
				$html .= esc_attr(get_post_meta($custom, 'secondH2H', true));			
			
			}else{				
			
				$html .= '';			
			
			}
			
			$html .='</td><td>';			
			
			if(!empty(get_post_meta($custom, 'secondSpreadPrice', true))){				
			
				$html .= esc_attr(get_post_meta($custom, 'secondSpreadPrice', true));			
			
			}else{				
			
				$html .= '';			
			
			}
			
			$html .='</td><td>';			
			
			if(!empty(get_post_meta($custom, 'secondSpreadPoint', true))){				
			
				$html .= esc_attr(get_post_meta($custom, 'secondSpreadPoint', true));			
			
			}else{				
			
				$html .= '';			
			
			}			
			$html .='</td><td>';			
			
			if(!empty(get_post_meta($custom, 'secondTotalPrice', true))){				
			
				$html .= esc_attr(get_post_meta($custom, 'secondTotalPrice', true));			
			
			}else{				
			
				$html .= '';			
			
			}
			
			$html .='</td><td>';
			
			if(!empty(get_post_meta($custom, 'secondTotalPoint', true))){				
			
				$html .= esc_attr(get_post_meta($custom, 'secondTotalPoint', true));			
			
			}else{				
			
				$html .= '';			
			
			}
			$html .='</td></tr></tbody>';
			
		}
		
	}
	
	$html .='</table>';
	
	return $html;
}
add_shortcode('sboshortcode', 'sports_betting_odds_manual_shortcode');

?>