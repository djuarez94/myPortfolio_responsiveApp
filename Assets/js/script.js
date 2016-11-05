$(document).ready(function() {
	$('#secondNav').hide();
	$('h1').hide();

	function showSecNav () {
		$('#secondNav').show();
	}

	function dissappearGreet () {
		$('h2').delay(1700).animate({opacity : '0'},"slow",showBoxes);
	}

	function showBoxes () {
		$('h2').hide();
		$('h1').show();
	}

	$('h2').animate({opacity : '1'},"slow",dissappearGreet);

	function mainNavToggle () {
		$('#secondNav').slideDown("slow");
		$('h1').hide();
	}
	$('h1').click(mainNavToggle);

	/*-------------------------------------
	| Ajax
	-------------------------------------*/

  function ajax_contact(event) {
	event.preventDefault();

	$('div .target1').stop(true).load('../../graphicDesign.php');
}

$('a .test').click(ajax_contact);
// $('#GDbox').click(showSecNav);

});