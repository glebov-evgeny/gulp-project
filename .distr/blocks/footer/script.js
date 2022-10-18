$(function () {
	initFooterBtn();
  
	function initFooterBtn(){
	  let footerBtn = document.querySelector('.footer__btn');
		function footerTint(){
			if(window.scrollY > 600 ){
				footerBtn.classList.add('active');
			}else{
				footerBtn.classList.remove('active');
			}
		}
		window.addEventListener('scroll', () => {
			footerTint();
		});
		footerTint();
	}
  
});