<?php   
	/* 
	Plugin Name: Pure.css Short Codes
	Plugin URI: http://www.anomalous.co.za
	Description: Add shortcodes for pure.css type websites.
	Author: D.Maidens
	Version: 1.0 
	Author URI: http://www.anomalous.co.za
	*/  
?>
<?php


function pure_g_shortcode( $atts , $content = null ) {

	// Code
       return '<div class="pure-g">' . do_shortcode($content) . '</pure-g>';
}
add_shortcode( 'pure-g', 'pure_g_shortcode' );



// Grid Short code
/* [col span="4" offset="2"]Here is the content[/col]
*/
function col_shortcode( $atts, $content = null  ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'xsmall' => '',
			'small' => '',
			'medium' => '12',
			'large' => '',
			'class' => '',
		), $atts )
	);

	// Check to see if offset is empty, if empty then remove from return code
	$xsmalltest = "";
	$smalltest = "";
	$mediumtest = "";
	$largetest = "";
	$classtest = "";


	if($xsmall != "") {
		$xsmalltest = 'col-xs-' . $xsmall . ' ';
	};
	if($small != "") {
		$smalltest = 'col-sm-' . $small . ' ';
	};
	if($medium != "") {
		$mediumtest = 'col-md-' . $medium . ' ';
	};
	if($large != "") {
		$largetest = 'col-lg-' . $large;
	};
	if($class != "") {
		$classtest = ' ' . $class;
	};

	return '<div class="' .  $xsmalltest . $smalltest . $mediumtest . $largetest . $classtest .  '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'col', 'col_shortcode' );



	// Adding TinyMCE Buttons
	add_action('init', 'add_button');  
	function add_button() {  
	   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
	   {  
			 add_filter('mce_external_plugins', 'add_plugin');  
			 add_filter('mce_buttons_3', 'register_button');  
	   }  
	}  
	function register_button($buttons) {  
	   array_push($buttons, "rowfluid","column");  // For each button add to the grid
	   return $buttons;  
	}  
	function add_plugin($plugin_array) {  
	   $plugin_array['rowfluid'] = plugins_url( '/assets/editor_plugin.js', __FILE__ );
	   return $plugin_array;  
	}
?>