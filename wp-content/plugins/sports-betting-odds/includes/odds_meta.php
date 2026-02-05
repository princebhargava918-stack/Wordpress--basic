<?php		

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
	
	function sports_betting_odds_post_meta_fields($post){ 
		
		// Use nonce for verification
		
		wp_nonce_field(plugin_basename( __FILE__ ), 'sports_betting_odds_metabox_nonce');
	?>
	<table style="width: 100%;">
		<tr>
			<td><?php _e( 'Sports', 'sports-betting-odds' ); ?></td>
			<td>
				<select name="sports" id="sports">
					<option value=""><?php echo esc_html(_e('Select sports', 'sports-betting-odds')); ?></option>
					<option <?php if(empty(get_post_meta($post->ID, 'sports', true)) || (get_post_meta($post->ID, 'sports', true)=='nfl')){ echo 'selected'; } ?> value="<?php echo esc_attr('nfl'); ?>"><?php echo esc_html(_e('NFL', 'sports-betting-odds')); ?></option>
					<option <?php if(!empty(get_post_meta($post->ID, 'sports', true)) && (get_post_meta($post->ID, 'sports', true)=='mlb')){ echo 'selected'; } ?> value="<?php echo esc_attr('mlb'); ?>"><?php echo esc_html(_e('MLB','sports-betting-odds')); ?></option>
					<option <?php if(!empty(get_post_meta($post->ID, 'sports', true)) && (get_post_meta($post->ID, 'sports', true)=='nba')){ echo 'selected'; } ?> value="<?php echo esc_attr('nba'); ?>"><?php echo esc_html(_e('NBA','sports-betting-odds')); ?></option>
					<option <?php if(!empty(get_post_meta($post->ID, 'sports', true)) && (get_post_meta($post->ID, 'sports', true)=='wnba')){ echo 'selected'; } ?> value="<?php echo esc_attr('wnba'); ?>"><?php echo esc_html(_e('WNBA','sports-betting-odds')); ?></option>
					<option <?php if(!empty(get_post_meta($post->ID, 'sports', true)) && (get_post_meta($post->ID, 'sports', true)=='nhl')){ echo 'selected'; } ?> value="<?php echo esc_attr('nhl'); ?>"><?php echo esc_html(_e('NHL','sports-betting-odds')); ?></option>
					<option <?php if(!empty(get_post_meta($post->ID, 'sports', true)) && (get_post_meta($post->ID, 'sports', true)=='ncaaf')){ echo 'selected'; } ?> value="<?php echo esc_attr('ncaaf'); ?>"><?php echo esc_html(_e('NCAAF','sports-betting-odds')); ?></option>
					<option <?php if(!empty(get_post_meta($post->ID, 'sports', true)) && (get_post_meta($post->ID, 'sports', true)=='ncaab')){ echo 'selected'; } ?> value="<?php echo esc_attr('ncaab'); ?>"><?php echo esc_html(_e('NCAAB','sports-betting-odds')); ?></option> 
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Site Affiliate URL', 'sports-betting-odds'); ?> : <?php _e('The referral url from the affiliate program', 'sports-betting-odds'); ?></td>
			<td><label for="oddsAffiliatUrl"><input type="text" id="oddsAffiliatUrl" name="oddsAffiliatUrl" value="<?php if(!empty(get_post_meta($post->ID, 'oddsAffiliatUrl', true))){ echo esc_attr(get_post_meta($post->ID, 'oddsAffiliatUrl', true)); } ?>" /></label></td>
		</tr>
	</table>
           
	<h3><?php _e( 'Team1', 'sports-betting-odds' ); ?></h3>
	<table>
		<tr>
			<td><?php _e( 'Name', 'sports-betting-odds' ); ?>:-</td><td><label for="firstTeamName"><input type="text" name="firstTeamName" id="firstTeamName" value="<?php if(!empty(get_post_meta($post->ID, 'firstTeamName', true))){ echo esc_attr(get_post_meta($post->ID, 'firstTeamName', true)); } ?>" /></label></td>
		</tr>
		<tr>
			<td><?php _e( 'H2H', 'sports-betting-odds' ); ?>:-</td><td><label for="firstH2H"><input type="text" name="firstH2H" id="firstH2H" value="<?php if(!empty(get_post_meta($post->ID, 'firstH2H', true))){ echo esc_attr(get_post_meta($post->ID, 'firstH2H', true)); } ?>" /></label></td>
		</tr>
		<tr>
			<td><?php _e( 'Spread-Price', 'sports-betting-odds' ); ?>:-</td><td><label for="firstSpreadPrice"><input type="text" name="firstSpreadPrice" id="firstSpreadPrice" value="<?php if(!empty(get_post_meta($post->ID, 'firstSpreadPrice', true))){ echo esc_attr(get_post_meta($post->ID, 'firstSpreadPrice', true)); } ?>" /></label></td>
		</tr>
		<tr>
			<td><?php _e( 'Spread-Point', 'sports-betting-odds' ); ?>:-</td><td><label for="firstSpreadPoint"><input type="text" name="firstSpreadPoint" id="firstSpreadPoint" value="<?php if(!empty(get_post_meta($post->ID, 'firstSpreadPoint', true))){ echo esc_attr(get_post_meta($post->ID, 'firstSpreadPoint', true)); } ?>" /></label></td>
		</tr>
		<tr>
			<td><?php _e( 'Total-Price', 'sports-betting-odds' ); ?>:-</td><td><label for="firstTotalPrice"><input type="text" name="firstTotalPrice" id="firstTotalPrice" value="<?php if(!empty(get_post_meta($post->ID, 'firstTotalPrice', true))){ echo esc_attr(get_post_meta($post->ID, 'firstTotalPrice', true)); } ?>" /></label></td>
		</tr>
		<tr>
			<td><?php _e( 'Total-Point', 'sports-betting-odds' ); ?>:-</td><td><label for="firstTotalPoint"><input type="text" name="firstTotalPoint" id="firstTotalPoint" value="<?php if(!empty(get_post_meta($post->ID, 'firstTotalPoint', true))){ echo esc_attr(get_post_meta($post->ID, 'firstTotalPoint', true)); } ?>" /></label></td>
		</tr>
	</table>
   
	<h3><?php _e( 'Team2', 'sports-betting-odds' ); ?></h3>
           
	<table>
		<tr>
			<td><?php _e( 'Name', 'sports-betting-odds' ); ?>:-</td><td><label for="secondTeamName"><input type="text" name="secondTeamName" id="secondTeamName" value="<?php if(!empty(get_post_meta($post->ID, 'secondTeamName', true))){ echo esc_attr(get_post_meta($post->ID, 'secondTeamName', true)); } ?>" /></label></td>
		</tr>
		<tr>
			<td><?php _e( 'H2H', 'sports-betting-odds' ); ?>:-</td><td><label for="secondH2H"><input type="text" name="secondH2H" id="secondH2H" value="<?php if(!empty(get_post_meta($post->ID, 'secondH2H', true))){ echo esc_attr(get_post_meta($post->ID, 'secondH2H', true)); } ?>" /></label></td>
		</tr>
		<tr>
			<td><?php _e( 'Spread-Price', 'sports-betting-odds' ); ?>:-</td><td><label for="secondSpreadPrice"><input type="text" id="secondSpreadPrice" name="secondSpreadPrice" value="<?php if(!empty(get_post_meta($post->ID, 'secondSpreadPrice', true))){ echo esc_attr(get_post_meta($post->ID, 'secondSpreadPrice', true)); } ?>" /></label></td>
		</tr>
		<tr>
			<td><?php _e( 'Spread-Point', 'sports-betting-odds' ); ?>:-</td><td><label for="secondSpreadPoint"><input type="text" id="secondSpreadPoint" name="secondSpreadPoint" value="<?php if(!empty(get_post_meta($post->ID, 'secondSpreadPoint', true))){ echo esc_attr(get_post_meta($post->ID, 'secondSpreadPoint', true)); } ?>" /></label></td>
		</tr>
		<tr>
			<td><?php _e( 'Total-Price', 'sports-betting-odds' ); ?>:-</td><td><label for="secondTotalPrice"><input type="text" name="secondTotalPrice" id="secondTotalPrice" value="<?php if(!empty(get_post_meta($post->ID, 'secondTotalPrice', true))){ echo esc_attr(get_post_meta($post->ID, 'secondTotalPrice', true)); } ?>" /></label></td>
		</tr>
		<tr>
			<td><?php _e( 'Total-Point', 'sports-betting-odds' ); ?>:-</td><td><label for="secondTotalPoint"><input type="text" name="secondTotalPoint" id="secondTotalPoint" value="<?php if(!empty(get_post_meta($post->ID, 'secondTotalPoint', true))){ echo esc_attr(get_post_meta($post->ID, 'secondTotalPoint', true)); } ?>" /></label></td>
		</tr>
	</table>
		
	<?php 
	}
	
	//Save post meta data when post is saved
	
	add_action( 'save_post', 'sports_betting_odds_save_post_meta_data');
	
	function sports_betting_odds_save_post_meta_data($post_id) {
		
		if ((isset( $_POST['sports_betting_odds_metabox_nonce'])) && (wp_verify_nonce( $_POST['sports_betting_odds_metabox_nonce'], plugin_basename( __FILE__ )))) {
			
			if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return;
		
			if (current_user_can('manage_options')) {	
			
				if (isset($_POST['sports'])) { update_post_meta($post_id, 'sports', sanitize_text_field($_POST['sports'])); }
				
				if (isset($_POST['firstTeamName'])) { update_post_meta($post_id, 'firstTeamName', sanitize_text_field($_POST['firstTeamName'])); }	
				
				if (isset($_POST['firstH2H'])) { update_post_meta($post_id, 'firstH2H', sanitize_text_field($_POST['firstH2H'])); }

				if (isset($_POST['firstSpreadPrice'])) { update_post_meta($post_id, 'firstSpreadPrice', sanitize_text_field($_POST['firstSpreadPrice'])); }				
				
				if (isset($_POST['firstSpreadPoint'])) { update_post_meta($post_id, 'firstSpreadPoint', sanitize_text_field($_POST['firstSpreadPoint'])); }				
				
				if (isset($_POST['firstTotalPrice'])) { update_post_meta($post_id, 'firstTotalPrice', sanitize_text_field($_POST['firstTotalPrice'])); }				
				
				if (isset($_POST['firstTotalPoint'])) { update_post_meta($post_id, 'firstTotalPoint', sanitize_text_field($_POST['firstTotalPoint'])); }				
				
				if (isset($_POST['secondTeamName'])) { update_post_meta($post_id, 'secondTeamName', sanitize_text_field($_POST['secondTeamName'])); }				
				
				if (isset($_POST['secondH2H'])) { update_post_meta($post_id, 'secondH2H', sanitize_text_field($_POST['secondH2H'])); }				
				
				if (isset($_POST['secondSpreadPrice'])) { update_post_meta($post_id, 'secondSpreadPrice', sanitize_text_field($_POST['secondSpreadPrice'])); }				
				
				if (isset($_POST['secondSpreadPoint'])) { update_post_meta($post_id, 'secondSpreadPoint', sanitize_text_field($_POST['secondSpreadPoint'])); }				
				
				if (isset($_POST['secondTotalPrice'])) { update_post_meta($post_id, 'secondTotalPrice', sanitize_text_field($_POST['secondTotalPrice'])); }				
				
				if (isset($_POST['secondTotalPoint'])) { update_post_meta($post_id, 'secondTotalPoint', sanitize_text_field($_POST['secondTotalPoint'])); }				
				
				if (isset($_POST['oddsAffiliatUrl'])) { update_post_meta($post_id, 'oddsAffiliatUrl', sanitize_text_field($_POST['oddsAffiliatUrl'])); }
				
			}
			
		}
		
	}
?>