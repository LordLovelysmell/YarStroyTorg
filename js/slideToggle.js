$(document).ready(function(){
	$('.house-full-description').hide();
	
	$('.read-more-btn').click(function() {
		$(this).prev('.house-full-description').slideToggle(400);
	});
});