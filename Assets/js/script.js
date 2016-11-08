$(document).ready(function() {
	$('#secondNav').hide();
	
	$('h2').animate({opacity : '1'},"slow",dissappearGreet);

	function dissappearGreet () {
		$('h2').delay(1700).animate({opacity : '0'},"slow",showBoxes);
	}

	function showBoxes () {
		$('h2').hide();
		$('h1').show();
	}
/*-------------------------------------
| Ajax
-------------------------------------*/

  function ajax_graphicDesign(event) {
    event.preventDefault();

    $('div.target1').stop(true).load('graphicDesign.php');
    $('#GDbox').hide();
    $('#WDbox').hide();
    $('#mainNav1').hide();
}

$('#GDbox').click(ajax_graphicDesign);

function ajax_webDevelopment(event) {
    event.preventDefault();

    $('div.target2').stop(true).load('webDevelopment.php');
    $('#GDbox').hide();
    $('#WDbox').hide();
    $('#mainNav1').hide();
}

$('#WDbox').click(ajax_webDevelopment);


});