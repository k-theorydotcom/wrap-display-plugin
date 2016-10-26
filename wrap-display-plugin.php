<?php
/*
* Plugin Name: Wrap Display Plugin
* Description: Add Wraps inline, embeded, linked by using [wrap id=xxx].
* Version: 0.2
* Author: Jeff Klein
* Author URI: Wrap.co
*/



add_action( 'wp_enqueue_scripts', 'wrap_display_styles' );

function wrap_display_styles() {
   
   wp_enqueue_style( 'main', plugins_url( '/css/main.css', __FILE__ ));
   
   wp_enqueue_script( 'embed', 'https://wrap.co/embed/bootstrap.js', true, true );
   //wp_enqueue_script( $handle, $src = false, $deps = array(), $ver = false, $in_footer = false )
}


// [bartag foo="foo-value"]
function wrap_display( $atts ) {
    $a = shortcode_atts( array(
        'id' => '2a76c122-0b94-40c7-b3d8-2ee7925a6e77',
        'public' => 'something else',
        'phone' => false,
        'theme' => 'none',
    ), $atts );

  
    
	
	if ($a['theme'] == 'cardinal') { 
		return "<figure class='animated-overlay overlay-style caption-hover clearfix wrap-media-embed-overlay'><a class='img-link' href='https://wrap.co/wraps/" . $a['id'] . "' target='_self'></a><div class='wrap-display-card img-wrap' data-id=" . $a['id'] . "><img src='https://assets.wrap.co/covers/" . $a['id'] . "/embed/default' class='wrap-embed'/></div><figcaption><div class='thumb-info'><h5>View Wrap</h5></div></figcaption></figure>";
	}
	
	if ($a['phone'] == true) {
		
	}
	
	else {
		return "<a href='https://wrap.co/wraps/" . $a['id'] . "' target='_blank'><img src='https://assets.wrap.co/covers/" . $a['id'] . "/embed/default' class='wrap-embed'/></a>";
	}
			
			
    
}
add_shortcode( 'wrap', 'wrap_display' );



?>