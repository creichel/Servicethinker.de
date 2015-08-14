// ===============================================================
// SLIDESHOW FUNKTIONEN
// ===============================================================

/**
 * Setzt die Höhe vom übergebenen Element auf 60% der Fensterhöhe.
 * @param {Object} elem Das HTML-Element
 */
$.fn.setHeight = function(height) {
	var heightCSS = 'min-height';
	if (typeof height === "undefined" || height === null) {
		var windowHeight = $(window).height();
		var slideshowPos = this.offset().top;

		this.css(heightCSS, windowHeight-slideshowPos);
		return this;
	}
	else if (height <= 1 && height > 0) {
		this.css(heightCSS, $( window ).height() * height);
		return this;
	}
	else {
		this.css(heightCSS, height);
		return this;
	}
};


$(function(){
	'use strict';


	/**
	 * Responsive menu
	 */
	var $pull         = $('#mainnav-toggle'),
			$logo         = $('.banner'),
			$menu         = $('.mainnav ul'),
			isOpen        = false,
			eventToggleMenu = function(e) {
				if (isOpen) {
					isOpen = false;

					e.preventDefault();
					$menu.slideUp();
					$pull.removeClass('active');
					$logo.show(400);

				}
				else {
					isOpen = true;

					e.preventDefault();
					$menu.slideDown();
					$pull.addClass('active');
					$logo.hide(200);
				}
			};

	$pull.on('click', eventToggleMenu);

	/**
	 * Hover fix for touch devices
	 */
	/* 
	 * jQuery-ähnliche Funktionen
	 */

	// Klassenfunktionen
	// Quelle: http://toddmotto.com/creating-jquery-style-functions-in-javascript-hasclass-addclass-removeclass-toggleclass/

	function hasClass(elem, className) {
		if(elem === null) {return;}
		return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
	}

	function addClass(elem, className) {
		if(elem === null) {return;}
		if (!hasClass(elem, className)) {
			elem.className += ' ' + className;
		}
	}

	function removeClass(elem, className) {
		if(elem === null) {return;}
		var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
		if (hasClass(elem, className)) {
			while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
				newClass = newClass.replace(' ' + className + ' ', ' ');
			}
			elem.className = newClass.replace(/^\s+|\s+$/g, '');
		}
	}


	// Event-Handler Fuktion


	/*
	 * JavaScript für den Mouseover-Effekt
	 */

	function onHoverStart(ev) {
		addClass(ev.target, 'hover');
	}

	function onHoverEnd(ev) {
		removeClass(ev.target, 'hover');
	}

	var elements = document.querySelectorAll("a, button");
	for (var i = 0, ii = elements.length; i < ii; ++i) {
		var element = elements[i];
		element.ontouchstart = onHoverStart;
		element.onmouseover = onHoverStart;

		element.ontouchend = onHoverEnd;
		element.onmouseout = onHoverEnd;
	}
	
});


/**
 * Nice Menu on top
 */


$(function(){
	'use strict';

	// Options to set
	var $headerElement = $('#header');
	var $footerElement = $('#footer');
	var delta = 5;

	// Setting dynamic variables
	var headerHeight = $headerElement.outerHeight();
	var footerHeight = $footerElement.outerHeight();
	var didScroll = false;
	var headerIsHidden = false;
	var scrollTop = $(window).scrollTop();
	var lastScrollTop = 0;

	// The beast that changes everything
	function hasScrolled() {
		scrollTop = $(window).scrollTop();
		// Toggle on Top
		// First check if we are at the top of the world
		if (scrollTop <= 0) {
			$headerElement.addClass('on-top');
		}
		// Else we have to remove what we've done here.
		else {
			$headerElement.removeClass('on-top');
		}

		// Show or hide the header

		if (Math.abs(lastScrollTop - scrollTop) <= delta) {return;}

		if (scrollTop > lastScrollTop && scrollTop > headerHeight && scrollTop + $(window).height() + delta + headerHeight + footerHeight <= $(document).height()){
			// Scroll Down
			if (headerIsHidden === false) {
				$headerElement.addClass('hide-header');
				headerIsHidden = true;
			}
		} 
		else {
			// Scroll Up
			if (headerIsHidden === true) {
				$headerElement.removeClass('hide-header');
				headerIsHidden = false;
			}
		}


		lastScrollTop = scrollTop;
	}

	// Our variable beast
	$(window).scroll(function() {
	  didScroll = true;
	});

	// Our trigger
	setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
	}, 250);

});
