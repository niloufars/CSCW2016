$( document ).ready( function() {
	
	var $window = $(window);
	
	function checkWidth() {
		
		var windowsize = $window.width();
		
		if(windowsize > 767) {
			$('nav').show();
		} else {
			$('nav').hide();
		}
	}
	
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);
    
    
    $('.menu-link').on('click', function(e) {
	   e.preventDefault();
	   $('nav').slideToggle('fast');
    });
	
    $("aside h2").on('click', function() {
    	$(this).parent().toggleClass("collapsed");
    })
    
});
