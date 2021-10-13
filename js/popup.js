$('.ws-info').each(function() {
	$(this).on("click", function() {
		$(this).siblings('.ws-popup').addClass('active');
		$('.overlay').addClass('active');
	});
	$('.close-btn, .overlay').click(function() {
		$('.ws-popup').removeClass('active');
		$('.overlay').removeClass('active');
	});
});