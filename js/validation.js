$('.registration-form').blur(function() {
	if(!$(this).val()) {
		$(this).parents('p').addClass('warning');
	}
});