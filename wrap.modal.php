<?php

function wrapModalDisplay($wrapid, $wrapSize) {  

	   wp_enqueue_script( 'wrap-embed-preview', 'https://wrap.co/embed/preview-bootstrap.js', '' , true, true );
	   wp_enqueue_script( 'wrap-embed-preview-modal', plugins_url( '/js/preview.js', __FILE__ ) , true, true );


return "<img data-id='$wrapid' src='https://assets.wrap.co/covers/" . $wrapid . "/embed/default' class='wrap-embed " . $wrapSize ."'/>";

}