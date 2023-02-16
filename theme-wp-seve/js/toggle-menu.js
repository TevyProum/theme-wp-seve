jQuery(document).ready(function() {
	jQuery('#slideMe').hide();
   	jQuery('a#clickMe').click(function() {
   		jQuery('#slideMe').slideToggle(400);
   		return false;
   	});
});