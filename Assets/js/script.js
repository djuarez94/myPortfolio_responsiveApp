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

	$("#loginForm2D").submit(function( event ) {
		var answer = confirm("Are you sure you want to delete the user?");

		if (answer == true) {
		    return;
		}

		event.preventDefault();
	});

});