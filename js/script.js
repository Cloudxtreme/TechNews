$(document).ready(function(){
	$("marquee").hover(function () { 
	    this.stop();
		}, function () {
	    this.start();
	});
});