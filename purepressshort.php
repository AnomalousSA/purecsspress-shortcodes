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
       return '<div class="pure-g">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'pure-g', 'pure_g_shortcode' );



// Grid Short code
/* [col span="4" offset="2"]Here is the content[/col]
*/
function pure_u_shortcode( $atts, $content = null  ) {

	// Attributes
	extract( shortcode_atts(
		array(
                        'standard' => '1',
			'small' => '',
			'medium' => '',
			'large' => '',
			'xlarge' => '',
			'class' => '',
		), $atts )
	);

	// Check to see if offset is empty, if empty then remove from return code
	$standardtest = "";
        $smalltest = "";
	$mediumtest = "";
	$largetest = "";
	$xlargetest = "";
	$classtest = "";

        if($standard != "") {
		$standardtest = 'pure-u-' . $standard . ' ';
	};
        
	if($small != "") {
		$smalltest = 'pure-u-sm-' . $small . ' ';
	};
	if($medium != "") {
		$mediumtest = 'pure-u-md-' . $medium . ' ';
	};
	if($large != "") {
		$largetest = 'pure-u-lg-' . $large . ' ';
	};
	if($xlarge != "") {
		$xlargetest = 'pure-u-xl-' . $xlarge;
	};
	if($class != "") {
		$classtest = ' ' . $class;
	};

	return '<div class="' .  $standardtest .  $smalltest . $mediumtest . $largetest . $xlargetest . $classtest .  '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'pure-u', 'pure_u_shortcode' );


function pure_button_shortcode( $atts , $content = null ) {
    
        extract( shortcode_atts(
		array(
                        'href' => '',
			'class' => '',
		), $atts )
	);
        
        $hreftest = "";
        $classtest = "";
        
        if($href != "") {
		$hreftest = ' ' . $href . ' ';
	};
        if($class != "") {
		$classtest = ' ' . $class;
	};
	// Code
       return '<a href="' .$hreftest . '" class="pure-button' . $classtest . '">' . do_shortcode($content) . '</a>';
}
add_shortcode( 'button', 'pure_button_shortcode' );


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
	   array_push($buttons, "rowfluid","column","thebutton");  // For each button add to the grid
	   return $buttons;  
	}  
	function add_plugin($plugin_array) {  
	   $plugin_array['rowfluid'] = plugins_url( '/assets/editor_plugin.js', __FILE__ );
	   return $plugin_array;  
	}
?>