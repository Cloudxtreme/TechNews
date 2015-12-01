$(document).ready(function(){
	$("marquee").hover(function () { 
	    this.stop();
		}, function () {
	    this.start();
	});	
	
	$.LoadingOverlaySetup({
	     color           : "rgb(255, 255, 255)",
	     image           : "assets/img/loading.gif",
	});	
	if (!$('footer').hasClass('navbar-fixed-bottom')){
		$.LoadingOverlay("show");
		setTimeout(function(){
		    $.LoadingOverlay("hide");
		}, 1000);
	}
	
	$('#sendBtn').click(function(){
		swal("Thank you", "Your message was sent successfully")
	})
});