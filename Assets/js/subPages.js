$(document).ready(function() {
	/*-------------------------------------
	| Smooth Scroll
	-------------------------------------*/
	function scrollMe () {
	$('html,body').animate({
        scrollTop: $("#aboutMe").offset().top},
        'slow');
}

function scrollWork () {
	$('html,body').animate({
        scrollTop: $("#myWork").offset().top},
        'slow');
}

function scrollContact () {
	$('html,body').animate({
        scrollTop: $("#contactMe").offset().top},
        'slow');
}

$("li #about").click(scrollMe);
$("li #work").click(scrollWork);
$("li #contact").click(scrollContact);



});