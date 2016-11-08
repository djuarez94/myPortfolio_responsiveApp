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

/*-------------------------------------
| IMAGE FADE WHEN SCROLLING
-------------------------------------*/
function showImages(el) {
        var windowHeight = jQuery( window ).height();
        $(el).each(function(){
            var thisPos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (topOfWindow + windowHeight - 200 > thisPos ) {
                $(this).addClass("fadeIn");
            }
        });
    }

    // if the image in the window of browser when the page is loaded, show that image
    $(document).ready(function(){
            showImages('.star');
    });

    // if the image in the window of browser when scrolling the page, show that image
    $(window).scroll(function() {
            showImages('.star');
    });



});