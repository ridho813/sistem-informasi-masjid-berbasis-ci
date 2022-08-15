jQuery.noConflict();
(function($) {
	$(function() {

		$('#comment, #author, #email, #url')
		.focusin(function(){
			$(this).parent().css('border-color','#888');
		})
		.focusout(function(){
			$(this).parent().removeAttr('style');
		});
		$('.rpthumb:last, .comment:last').css('border-bottom','none');

	})
})(jQuery)
