jQuery(function ($) {
	// Load dialog on page load
	//$('#basic-modal-content').modal();

	// Load dialog on click
	$('#basic-modal .basic').click(function (e) {
		$('#basic-modal-content').modal();

		return false;
	});
	$('.mobile-button').on('click', '.ars-mobile-button', function(e) {
	e.preventDefault();
		if(!$(this).hasClass('mob-clicked-open')){
			$(this).addClass('mob-clicked-open');
			$(this).removeClass('mob-clicked-closed');
			$('.ars-menu-header').slideDown();
		}else{
		if($(this).hasClass('mob-clicked-open')){
			$(this).removeClass('mob-clicked-open');
			$(this).addClass('mob-clicked-closed');
			$('.ars-menu-header').slideUp();
		}
		}
	});
	//Resize event is hiding main nav
	/*window.addEventListener("resize", function() {
			if($(".ars-mobile-button").hasClass("mob-clicked-closed")){
				$(".ars-menu-header").show();
			}
	}, false);*/
	
	//$.lockfixed(".ars-navigation-wrapper",{offset: {top: 0, bottom: 100}});
	
});
//myaccordion
jQuery(document).ready(function() {
	function close_myaccordion_section() {
		jQuery('.myaccordion .myaccordion-section-title').removeClass('active');
		jQuery('.myaccordion .myaccordion-section-content').slideUp(300).removeClass('open');
	}

	jQuery('.myaccordion-section-title').click(function(e) {
		// Grab current anchor value
		var currentAttrValue = jQuery(this).attr('href');

		if(jQuery(e.target).is('.active')) {
			close_myaccordion_section();
		}else {
			close_myaccordion_section();

			// Add active class to section title
			jQuery(this).addClass('active');
			// Open up the hidden content panel
			jQuery('.myaccordion ' + currentAttrValue).slideDown(300).addClass('open');
		}

		e.preventDefault();
	});
});
//end
//start
//jQuery(document).ready(function ($) {
//fixed sidebar


//end
//});