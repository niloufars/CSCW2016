$( document ).ready( function() {
	//toggle collapsible menu when menu link is clicked (in mobile version)
    $(".menu-link").on('click', function() {
    	$(".menu-link").toggleClass("expanded");
    	$("nav").toggleClass("expanded");
    })
});
