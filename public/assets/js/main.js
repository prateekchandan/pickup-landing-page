;(function(){

			// Menu settings
			$('#menuToggle, .menu-close').on('click', function(){
				$('#menuToggle').toggleClass('active');
				$('body').toggleClass('body-push-toleft');
				$('#theMenu').toggleClass('menu-open');
			});



})(jQuery)

function gotoSlide(ind){
	$("#how-carousel").carousel(ind);
	$("#how1-carousel").carousel(ind);

	for (var i = 0;i<3;i++) {
		$('#ind-item'+i).removeClass('ind-item-active');
	};
	$('#ind-item'+ind).addClass('ind-item-active');
}



