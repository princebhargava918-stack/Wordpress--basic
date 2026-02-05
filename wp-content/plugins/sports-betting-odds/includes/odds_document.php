<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


function sports_betting_odds_document(){
?>	
<table style="width: 100%;">
<tr>
<td><h1><?php _e('Document', 'sports-betting-odds' ); ?></h1></td>        
</tr>		
<tr>
<td><?php _e("1. Create Odds using 'Add New Odds'", 'sports-betting-odds' ); ?></td>        
</tr>
<tr>
<td><?php _e('2. Use the post id to create shortcode as shown below', 'sports-betting-odds' ); ?></td>        
</tr>
<tr>
<td><?php _e('Example', 'sports-betting-odds' ); ?>:-[sboshortcode site1='6' site2='69' site3='62' site4='65' site5='66' site6='67' site7='68' site8='69' site9='70' site10='71']</td>
</tr>
<tr>
<td>
<a href="<?php echo esc_url('https://www.flytonic.com/free-sports-betting-odds-documentation/'); ?>" target="_blank"><input type="button" value="<?php _e('Click Here to check User Manual/Documentation of the plugin', 'sports-betting-odds' ); ?>" class="button button-primary button-large req_btn" /></a>
</td>        
</tr>
<tr>
<td><?php _e('1. Inbuilt bookmakers', 'sports-betting-odds' ); ?>&nbsp;&nbsp;<a href="<?php echo esc_url('https://www.flytonic.com/product/betting-odds-plugin-for-wordpress/'); ?>" target="_blank"><?php _e('Upgrade to Pro', 'sports-betting-odds' ); ?></a></td>
</tr>
<tr>
<td><?php _e('2. Live betting odds  API for major leagues like NFL, NHL, NCAAF, MLB, NBA,NCAAB', 'sports-betting-odds' ); ?>&nbsp;&nbsp;<a href="<?php echo esc_url('https://www.flytonic.com/product/betting-odds-plugin-for-wordpress/'); ?>" target="_blank"><?php _e('Upgrade to Pro', 'sports-betting-odds' ); ?></a></td>
</tr>
<!--<tr>
<td><?php _e('3. Live scores, team standings, team players etc', 'sports-betting-odds' ); ?>&nbsp;&nbsp;<a href="<?php echo esc_url('https://www.flytonic.com/product/betting-odds-plugin-for-wordpress/'); ?>" target="_blank"><?php _e('Upgrade to Pro', 'sports-betting-odds' ); ?></a></td>
</tr>-->
<tr>

<td><a href="<?php echo esc_url('https://www.flytonic.com/product/betting-odds-plugin-for-wordpress/'); ?>" target="_blank"><input type="button" value="<?php _e('Upgrade to Pro', 'sports-betting-odds' ); ?>" class="button button-primary button-large req_btn" /></a></td>        

</tr>
</table>
<?php
}
?>