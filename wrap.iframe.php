<?php

function wrapIframeDisplay($wrapid, $wrapSize) {    

	wp_enqueue_script( 'wrap-embed-preview', 'https://wrap.co/embed/bootstrap.js', '' , true, true );

return <<<EOT
<div class="wrap-media-embed $wrapSize" data-wrap-id="$wrapid"></div>
EOT;
}