jQuery(document).ready( function($) {
	$("#allsts").click(function() {
	$(".one").attr('checked', true);
	});
	
	$("#nosts").click(function() {
	$(".one").attr('checked', false);
	});
	
	$('.one' ).each( function() {
	var isitchecked = this.checked;
	});
});