jQuery(document).ready(function() {
	jQuery('#jwl-donate-box').fadeIn();
	
	jQuery('img.jwl-close').click(function() {
		jQuery('#jwl-donate-box').fadeOut();
	});
});