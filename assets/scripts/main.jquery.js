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
   * Nice Menu on top
   */
  var scroll = $(window).scrollTop();
  if (scroll <= 0) {
    $('#header').addClass('on-top');
  }
  else {
    $('#header').removeClass('on-top');
  }

  /**
   * Hover fix for touch devices
   */
  $('a, button').bind ("touchstart mouseover", function(){
    $(this).addClass("hover");
  });
  
  $('a, button').bind ("touchend mouseout", function(){
    $(this).removeClass("hover");
  });

  
});
/**
 * Nice Menu on top
 */
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll <= 0) {
    $('#header').addClass('on-top');
  }
  else {
    $('#header').removeClass('on-top');
  }
});