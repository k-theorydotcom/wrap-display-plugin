jQuery("img.wrap-embed").on("click", function($) {
	PreviewWrapMediaEmbed.show(jQuery(event.target).data("id"));
	return false; 
});