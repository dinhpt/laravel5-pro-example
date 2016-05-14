$(document).ready(function() {
	 $('#menu_footer1,#menu_footer2').ReSmenu({ maxWidth: 960 });
	 
	 
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
		e.stopPropagation();
    });
	$("#page-content-wrapper").click(function() {
        $("#wrapper").removeClass("toggled");
    });
   
});