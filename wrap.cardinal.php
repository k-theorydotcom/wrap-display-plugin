<?php
	
function wrapCardinalTheme($wrapid) {  

	return "<figure class='animated-overlay overlay-style caption-hover clearfix wrap-media-embed-overlay'><a class='img-link' href='https://wrap.co/wraps/" . $wrapid . "' target='_self'></a><div class='wrap-display-card img-wrap' data-id=" . $wrapid . "><img src='https://assets.wrap.co/covers/" . $wrapid . "/embed/default' class='wrap-embed'/></div><figcaption><div class='thumb-info'><h5>View Wrap</h5></div></figcaption></figure>"

}