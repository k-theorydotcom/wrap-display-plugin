<?php

function wrapPhoneDisplay($wrapid) {  
	
	wp_enqueue_script( 'embed', 'https://wrap.co/embed/bootstrap.js','', true, true );
	wp_enqueue_style( 'main', plugins_url( '/css/phone.css', __FILE__ ));

	$phoneType = 'Silver';
	$phoneBrowser = 'Light';

return <<<EOT
<script>

jQuery(function ($) {
  jQuery(window).load(function () {
      $('.wrap-media-embed-overlay').click();
  });
  console.log('Saaa.');
});


</script>
<div class='wrap-phone'>
<div class='phone $phoneType'></div>
	<div data-wrap-id='$wrapid' data-uncached='data-uncached' class='wrap-media-embed'></div>
	<div class='navBar $phoneBrowser'></div>
<div class='bottomBar $phoneBrowser'></div>
</div>
$wrapid
EOT;
}