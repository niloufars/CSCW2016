$( document ).ready( function() {
    $("aside h2").on('click', function() {
    	$(this).parent().toggleClass("expanded");
    })    
});
