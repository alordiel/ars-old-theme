jQuery.fn.collapsibleNav = function(options) {

	var defaults = {
		hideByDefault: '', //ids of elements you want hidden by default
		clickController: 'h2', //your heading elements
		slideSpeed: 150 //speed of animation
	};

	//initial variables
	var opts = jQuery.extend(defaults, options),
		$list = jQuery(this),
		$heading = $list.find(opts.clickController),
		$listItems = $list.children(),
		closedItems;
	
	//function that is called when slidable is clicked
	function updateArray(e) {
		//get id of element for adding to array
		var eId = jQuery(e).attr('id');
		
		//look for element in cookie array
		var arrPos = jQuery.inArray(eId, closedItems);

		if (arrPos == -1) {
			//element not in array, add element
			closedItems.push(eId);
		} else {
			//element in array, remove element
			closedItems.splice(arrPos, 1);
		}
		//update cookie
		jQuery.cookie('closedItems', closedItems, { path: '/', expires: 365 });
	}
	
	//remember closed/open state of nav items
	if (jQuery.cookie) {
		if (!jQuery.cookie('closedItems')) {
			jQuery.cookie('closedItems', '1,'+opts.hideByDefault, { path: '/', expires: 365 });
		}

		//if cookie exists
		if (jQuery.cookie('closedItems')) {
			
			//split cookie into array
			closedItems = jQuery.cookie('closedItems').split(',');
			//iterate through array and apply closed class to each element within it
			for (var i = 0; i < closedItems.length; ++i) {
				jQuery('#' + closedItems[i]).addClass('closed');
			}
			//hide content underneath each element that has a class of closed
			jQuery('.closed').children('ul').hide();
		}
	}
	
	$heading.append('<span class="toggleIcon"> </span>');
	
	$heading.click(function(){

		var $target = jQuery(this),
			$parent = $target.parent();

		//toggle closed class
		$parent.toggleClass('closed');

		//slidey stuff
		$target.next().slideToggle(opts.slideSpeed);

		//update cookie with current li
		updateArray($parent);

		return false;

	});
	
	return this;
	
};


jQuery(document).ready(function() {
  jQuery("#search-label").click(function()
  {
    jQuery("#nav-right").toggle();
  });
});
/*
 * Url preview script 
 * powered by jQuery (http://www.jquery.com)
 * 
 * written by Alen Grakalic (http://cssglobe.com)
 * 
 * for more info visit http://cssglobe.com/post/1695/easiest-tooltip-and-image-preview-using-jquery
 *
 */
 
this.screenshotPreview = function(){	
	/* CONFIG */
		
		xOffset = 10;
		yOffset = 30;
		
		// these 2 variable determine popup's distance from the cursor
		// you might want to adjust to get the right result
		
	/* END CONFIG */
	$("a.screenshot").hover(function(e){
		this.t = this.title;
		this.title = "";	
		var c = (this.t != "") ? "<br/>" + this.t : "";
		$("body").append("<p id='screenshot'><img src='../../../arsofiav4 - Copy/includes/js/"+ this.rel +"' alt='url preview' />"+ c +"</p>");								 
		$("#screenshot")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px")
			.css("position", "absolute")
			.fadeIn("fast");						
    },
	function(){
		this.title = this.t;	
		$("#screenshot").remove();
    });	
	$("a.screenshot").mousemove(function(e){
		$("#screenshot")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px");
	});			
};


// starting the script on page load
$(document).ready(function(){
	screenshotPreview();
});