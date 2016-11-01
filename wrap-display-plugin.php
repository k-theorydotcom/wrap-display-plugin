<?php
/*
* Plugin Name: Wrap Display Plugin
* Description: Add Wraps inline, embeded, linked by using [wrap id=xxx].
* Version: 0.2
* Author: Jeff Klein
* Author URI: Wrap.co
*/


//[wrap id=da973830-a1b2-4f40-a7ae-567c72fc5552]
//[wrap id=da973830-a1b2-4f40-a7ae-567c72fc5552 theme=cardinal]
//[wrap id=da973830-a1b2-4f40-a7ae-567c72fc5552 theme=modal]


// Get the path
define( 'WRAP__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( WRAP__PLUGIN_DIR . 'wrap.phone.php' );
require_once( WRAP__PLUGIN_DIR . 'wrap.modal.php' );
require_once( WRAP__PLUGIN_DIR . 'wrap.iframe.php' );



add_action( 'wp_enqueue_scripts', 'wrap_display_styles' );
function wrap_display_styles() {
   wp_enqueue_style( 'main', plugins_url( '/css/main.css', __FILE__ ));
}



// [Shortcode array function]
function wrap_display( $atts ) {
    $a = shortcode_atts( array(
        'id' => '2a76c122-0b94-40c7-b3d8-2ee7925a6e77',
        'public' => 'something else',
        'phone' => false,
        'size'  => 'none',
        'theme' => 'modal',
    ), $atts );
  	
  	  
	
	if ($a['theme'] == 'cardinal') { 
		return wrapCardinalTheme($a['id']);
	}
	
	if ($a['phone'] == true) {
		return wrapPhoneDisplay($a['id'], $a['size'] );
				
		}
	if ($a['theme'] == 'modal') {
		return wrapModalDisplay($a['id'], $a['size']);
				
		}
	if ($a['theme'] == 'iframe') {
		return wrapIframeDisplay($a['id'], $a['size']);
				
		}
	else {
		return "<a href='https://wrap.co/wraps/" . $a['id'] . "' target='_blank'><img src='https://assets.wrap.co/covers/" . $a['id'] . "/embed/default' class='wrap-embed generic'/></a>";
	}
					
    
}
add_shortcode( 'wrap', 'wrap_display' );

?>