$(document).ready(function() {
	$('#secondNav').hide();
	$('h1').hide();

	function showSecNav () {
		$('#secondNav').show();
	}

	$('#GD').click(showSecNav);

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

  function ajax_graphicDesign(event) {
    event.preventDefault();

    $('div.target1').stop(true).load('graphicDesign.php');
    $('h1').hide();
}

$('#GDbox').click(ajax_graphicDesign);

function ajax_webDevelopment(event) {
    event.preventDefault();

    $('div.target2').stop(true).load('webDevelopment.php');
    $('h1').hide();
}

$('#WDbox').click(ajax_webDevelopment);

function ajax_webDevelopment2(event) {
    event.preventDefault();

    $('div.target3').stop(true).load('webDevelopment.php');
}

$('#secondNav2 a #WD').click(ajax_webDevelopment2);

function ajax_graphicDesign2(event) {
    event.preventDefault();

    $('div.target3').stop(true).load('graphic Design.php');
}

$('#secondNav2 a #GD').click(ajax_graphicDesign2);

});