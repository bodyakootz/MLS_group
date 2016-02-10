$(function() {
	$('#menuToggle').click(function() {
	    if($(this).is(':checked')) {
	        $('.admin_menu').animate({left: "0px"},500);
	    } else {
	       $('.admin_menu').animate({left: "-320px"},500);
	    }
	});
	// $body_height=$('body').height();
	// console.log($body_height);
	// $header_height=$('header').height();
	// console.log($header_height);
	// $navbar_height=$body_height-$header_height;
	// console.log($navbar_height);
	// $('.admin_menu').css('height', $navbar_height);
});

