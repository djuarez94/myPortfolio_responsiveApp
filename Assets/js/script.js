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
});