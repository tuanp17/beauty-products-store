$(document).ready(function() {
	$('#myCarousel-content').carousel({
	interval: 0
	})
    
    $('#myCarousel-content').on('slid.bs.carousel', function() {
    	//alert("slid");
	});  
});


