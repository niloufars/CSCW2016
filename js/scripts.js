$( document ).ready( function() {
	//toggle collapsible sidebars when headers are clicked (in mobile version)
    $("aside h2").on('click', function() {
    	$(this).parent().toggleClass("expanded");
    })    
	//toggle collapsible menu when menu link is clicked (in mobile version)
    $(".menu-link").on('click', function() {
    	$(".menu-link").toggleClass("expanded");
    	$("nav").toggleClass("expanded");
    })
});
