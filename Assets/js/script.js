$(document).ready(function() {
	$('#secondNav2').hide();

	// function showSecondNav () {
	// 	$('#secondNav2').show();
	// }

	/*-------------------------------------
	| Hide Blue Div's
	-------------------------------------*/
	$('h1').hide();

	// function showSecNav () {
	// 	$('#secondNav').show();
	// }

	// $('#GD').click(showSecNav);
	/*-------------------------------------
	| Show & Hide Greet | Blue Div's Appear
	-------------------------------------*/
	$('h2').animate({opacity : '1'},"slow",dissappearGreet);

	function dissappearGreet () {
		$('h2').delay(1700).animate({opacity : '0'},"slow",showBoxes);
	}

	function showBoxes () {
		$('h2').toggleClass('hidden');
		$('h1').show();
	}
	/*-------------------------------------
	| Second Nav Slides After Blue Div Click
	-------------------------------------*/
	// function mainNavToggle () {
	// 	$('#secondNav').slideDown("slow");
	// 	$('h1').hide();
	// }
	// $('h1').click(mainNavToggle);

	/*-------------------------------------
	| Ajax
	-------------------------------------*/
function ajaxTest1 () {
	$('div.target1').stop(true).load('graphicDesign.php');
}

function ajax_graphicDesign(event) {
    event.preventDefault();
    $('h1').hide();
    // $('div.target1').stop(true).load('graphicDesign.php');
    $('div.target2').hide();
}

$('#GDbox').click(ajax_graphicDesign);
// $('#GDbox').click(showSecondNav);
$('#GDbox').click(ajaxTest1);

function ajax_webDevelopment(event) {
    event.preventDefault();
    $('h1').hide();
    // $('div.target2').stop(true).load('webDevelopment.php');
    $('div.target1').hide();
}

function ajaxTest2 () {
	$('div.target2').stop(true).load('webDevelopment.php');
}

$('#WDbox').click(ajax_webDevelopment);
// $('#WDbox').click(showSecondNav);
$('#WDbox').click(ajaxTest);


/*-------------------------------------
| Second Nav Ajax
-------------------------------------*/
// function ajax_webDevelopment2(event) {
//     event.preventDefault();

//     $('div.target3').stop(true).load('webDevelopment.php');
// }
// $('#secondNav2 a #WD').click(ajax_webDevelopment2);

// function ajax_graphicDesign2(event) {
//     event.preventDefault();

//     $('div.target4').stop(true).load('graphic Design.php');
// }

// $('#secondNav2 a #GD').click(ajax_graphicDesign2);

});