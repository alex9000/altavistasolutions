jQuery(document).ready(function($) { 
	
	// Initialize carousel on projects page
	$('#myCarousel').carousel();
	
  // Toggle arrows on accordions  
	$('.accordion-body').on('shown', function () {
	   $(this).closest('.accordion-group').find(".icon-chevron-down").removeClass("icon-chevron-down").addClass("icon-chevron-up");
	});

	$('.accordion-body').on('hidden', function () {
	   $(".icon-chevron-up").removeClass("icon-chevron-up").addClass("icon-chevron-down");
	});


	// Add placeholder text to MailChimp signup
	$('#mc_mv_EMAIL').attr('placeholder', 'Enter Your Email');
	
	// Stop video when modal closed
	$('#frontMovie').on('hidden', function () {
	 	//First get the  iframe URL
		var url = $('#player').attr('src');

		//Then assign the src to null, this then stops the video been playing
		$('#player').attr('src', '');

		// Finally you reasign the URL back to your iframe, so when you hide and load it again you still have the link
		$('#player').attr('src', url);
	})
	
	
});
