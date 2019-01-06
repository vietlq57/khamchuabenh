jQuery(document).ready(function($) {
	$('.bxslider1').bxSlider({
		pagerCustom: '#bx-pager',
		controls: false,
		captions: true,
		auto: true
	});
	$('.bxslider-main').bxSlider({
		pager: false,
		auto: true,
		speed: 800
	});
	$('.slider-feedback').bxSlider({
		pager: false,
		controls: false,
		auto: true,
		speed: 800
	});
	$('#bx-pager a').click(function(){
		$('#bx-pager a').removeClass("active-cal");
		$(this).addClass("active-cal");
	});
	if ( ($(window).height() + 100) < $(document).height() ) {
		$('#top-link-block').removeClass('hidden').affix({
			// how far to scroll down before link "slides" into view
			offset: {top:100}
		});
	}
	$('.map-click-element').hide();
	$('.map-click').click(function(){
		var textmap = $('.map-click').text();
		
		if(textmap == 'Tìm chúng tôi trên bản đồ')
		{
			$('.map-click').text('Ẩn bản đồ');
		}
		else
		{
			$('.map-click').text('Tìm chúng tôi trên bản đồ');
		}
		$('.map-click-element').slideToggle();
	});
});
jQuery(function() {
	/* Check validate */
	$('.contact-button').click(function() {
		var check = $('.check-captchar').text();
		if($('#result-capchar').val() != check) {
			$('#result-capchar').addClass('error');
			return false;
		} else {
			$('#result-capchar').removeClass('error');
			return true;
		}
	});
});
