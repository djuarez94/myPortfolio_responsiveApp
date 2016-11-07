$(document).ready(function() {
	$('#secondNav').hide();
	/*-------------------------------------
	| Hide Blue Div's
	-------------------------------------*/
	$('h1').hide();

	function showSecNav () {
		$('#secondNav').show();
	}

	$('#GD').click(showSecNav);
	/*-------------------------------------
	| Show & Hide Greet | Blue Div's Appear
	-------------------------------------*/
	$('h2').animate({opacity : '1'},"slow",dissappearGreet);

	function dissappearGreet () {
		$('h2').delay(1700).animate({opacity : '0'},"slow",showBoxes);
	}

	function showBoxes () {
		$('h2').hide();
		$('h1').show();
	}
	/*-------------------------------------
	| Second Nav Slides After Blue Div Click
	-------------------------------------*/
	function mainNavToggle () {
		$('#secondNav').slideDown("slow");
		$('h1').hide();
	}
	// $('h1').click(mainNavToggle);

	/*-------------------------------------
	| Ajax
	-------------------------------------*/

//   function ajax_graphicDesign(event) {
//     event.preventDefault();

//     $('div.target1').stop(true).load('graphicDesign.php');
//     $('#GDbox').hide();
//     $('#WDbox').hide();
// }

// $('#GDbox').click(ajax_graphicDesign);

// function ajax_webDevelopment(event) {
//     event.preventDefault();

//     $('div.target2').stop(true).load('webDevelopment.php');
//     $('#GDbox').hide();
//     $('#WDbox').hide();
// }

// $('#WDbox').click(ajax_webDevelopment);


});