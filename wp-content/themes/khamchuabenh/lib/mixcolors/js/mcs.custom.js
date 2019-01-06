jQuery(function() {
	$('.bg-popup').click(function() {
		$('#popup-start').fadeOut();
	});
	$('.close-popup').click(function() {
		$('#popup-start').fadeOut();
		return false;
	});
	$('.item-faq .more-all').click(function() {
		$(this).parents('.item-faq').find('.small-content').slideToggle();
		$(this).parents('.item-faq').find('.full-content').slideToggle();
		return false;
	});
	/* FAQ */
	$('.item-faq-click a').click(function(){
		var id = $(this).attr('attr-id');
		var offset = $(id).offset().top - 10;
		$('html,body').animate({ scrollTop: offset});
		return false;
	});
});
$(window).scroll(function() {
	if($(window).width() > 767) {
		var offset = $('.header nav').offset().top;
		console.log(offset,$(this).scrollTop());
		if($(this).scrollTop() > offset) $('.header nav .navbar').addClass('fixed');
		else $('.header nav .navbar').removeClass('fixed');
	}
});
