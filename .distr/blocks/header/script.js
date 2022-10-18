$(function () {
	initMenu();
	initScroll();
	initHeaderScroll();
  
	function initHeaderScroll(){
	  let header = document.querySelector('.header');
		function headerTint(){
			if(window.scrollY > 1 ){
			  header.classList.add('header__scrolled');
			}else{
			  header.classList.remove('header__scrolled');
			}
		}
		window.addEventListener('scroll', () => {
			headerTint();
		});
		headerTint();
	}
  
	function initMenu() {
	  $('.header__menu').on('click', function () {
		$('.header__nav').toggleClass('active')
  		$(this).toggleClass('active');
	  });
	  $('.header__nav-link, .header__nav-link-btn').on('click', function () {
		$('.ham, .header__nav, .header__menu').removeClass('active');
	  });
	}
	
	function initScroll() {
	  if (!$('.scroll').length) return;
  
	  $(document).on('click scroll.init', '.scroll', function (event) {
		event.preventDefault();
		$.fancybox.close();
  
		var
		  hrefId = $(this).attr('href') || $(this).data('href'),
		  posTop = $(hrefId).offset().top;
		$('html, body').animate({ scrollTop: posTop - 95 }, 1500);
	  });
	}
  
});