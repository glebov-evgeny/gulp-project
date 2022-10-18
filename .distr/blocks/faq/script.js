$(function () {
	faq();

	function faq() {
		$('.faq__item').click(function () {
			$(this).toggleClass('on');
			$(this).find('.faq__item-bottom').slideToggle();
		})

		$('.faq__item').each(function () {
			let elem = $(this).eq(0);

			elem.addClass('on');
			elem.find('.faq__item-bottom').slideToggle();

			return false;
		});

	}

});