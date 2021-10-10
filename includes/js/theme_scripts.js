/*jquery easing tabs cookie notify facebox*/

/*
 * jQuery Easing v1.1 - https://gsgd.co.uk/sandbox/jquery.easing.php
 *
 * Uses the built in easing capabilities added in jQuery 1.1
 * to offer multiple easing options
 *
 * Copyright (c) 2007 George Smith
 * Licensed under the MIT License:
 *   https://www.opensource.org/licenses/mit-license.php
 */
jQuery.easing={easein:function(x,t,b,c,d){return c*(t/=d)*t+b},easeinout:function(x,t,b,c,d){if(t<d/2)return 2*c*t*t/(d*d)+b;var a=t-d/2;return-2*c*a*a/(d*d)+2*c*a/d+c/2+b},easeout:function(x,t,b,c,d){return-c*t*t/(d*d)+2*c*t/d+b},expoin:function(x,t,b,c,d){var a=1;if(c<0){a*=-1;c*=-1}return a*(Math.exp(Math.log(c)/d*t))+b},expoout:function(x,t,b,c,d){var a=1;if(c<0){a*=-1;c*=-1}return a*(-Math.exp(-Math.log(c)/d*(t-d))+c+1)+b},expoinout:function(x,t,b,c,d){var a=1;if(c<0){a*=-1;c*=-1}if(t<d/2)return a*(Math.exp(Math.log(c/2)/(d/2)*t))+b;return a*(-Math.exp(-2*Math.log(c/2)/d*(t-d))+c+1)+b},bouncein:function(x,t,b,c,d){return c-jQuery.easing['bounceout'](x,d-t,0,c,d)+b},bounceout:function(x,t,b,c,d){if((t/=d)<(1/2.75)){return c*(7.5625*t*t)+b}else if(t<(2/2.75)){return c*(7.5625*(t-=(1.5/2.75))*t+.75)+b}else if(t<(2.5/2.75)){return c*(7.5625*(t-=(2.25/2.75))*t+.9375)+b}else{return c*(7.5625*(t-=(2.625/2.75))*t+.984375)+b}},bounceinout:function(x,t,b,c,d){if(t<d/2)return jQuery.easing['bouncein'](x,t*2,0,c,d)*.5+b;return jQuery.easing['bounceout'](x,t*2-d,0,c,d)*.5+c*.5+b},elasin:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);return-(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b},elasout:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);return a*Math.pow(2,-10*t)*Math.sin((t*d-s)*(2*Math.PI)/p)+c+b},elasinout:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d/2)==2)return b+c;if(!p)p=d*(.3*1.5);if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);if(t<1)return-.5*(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b;return a*Math.pow(2,-10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p)*.5+c+b},backin:function(x,t,b,c,d){var s=1.70158;return c*(t/=d)*t*((s+1)*t-s)+b},backout:function(x,t,b,c,d){var s=1.70158;return c*((t=t/d-1)*t*((s+1)*t+s)+1)+b},backinout:function(x,t,b,c,d){var s=1.70158;if((t/=d/2)<1)return c/2*(t*t*(((s*=(1.525))+1)*t-s))+b;return c/2*((t-=2)*t*(((s*=(1.525))+1)*t+s)+2)+b},linear:function(x,t,b,c,d){return c*t/d+b}};

/* idTabs ~ Sean Catchpole - Version 1.0 */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(7($){$.F.q=7(){4 s={"b":B,"3":L,"5":B};o(4 i=0;i<t.8;++i){4 n={},a=t[i];M(m a){f"I":$.w(n,a);l;f"v":f"u":n.b=a;l;f"C":n["3"]=a;l;f"7":n.5=a;l};$.w(s,n)}4 j=2;4 e=$("a[@d^=\'#\']",2).5(7(){9($("a.h",j)[0]==2)3 s["3"];4 r="#"+2.d.A(\'#\')[1];4 g=[];4 c=[];$("a",j).z(7(){9(2.d.K(/#/)){g[g.8]=2;c[c.8]="#"+2.d.A(\'#\')[1]}});9(s.5&&!s.5(r,c,j))3 s["3"];o(i y g)$(g[i]).x("h");o(i y c)$(c[i]).J();$(2).H("h");$(r).G();3 s["3"]});4 6;9(m s.b=="v"&&(6=e.k(":E("+s.b+")")).8)6.5();p 9(m s.b=="u"&&(6=e.k("[@d=\'#"+s.b+"\']")).8)6.5();p 9((6=e.k(".h")).8)6.x("h").5();p e.k(":D").5();3 2};$(7(){$(".q").z(7(){$(2).q()})})})(N)',50,50,'||this|return|var|click|test|function|length|if||start|idList|href|list|case|aList|selected||self|filter|break|typeof||for|else|idTabs|id||arguments|string|number|extend|removeClass|in|each|split|null|boolean|first|eq|fn|show|addClass|object|hide|match|false|switch|jQuery'.split('|'),0,{}))

jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};

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