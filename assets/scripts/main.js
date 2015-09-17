// ===============================================================
// SLIDESHOW FUNKTIONEN
// ===============================================================

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
 * Handle Mouseover on touch interfaces
 */

function onHoverStart(ev) {
  addClass(ev.target, 'hover');
}

function onHoverEnd(ev) {
  removeClass(ev.target, 'hover');
}

document.addEventListener("DOMContentLoaded",function(){
  "use strict"

  var elements = document.querySelectorAll("a, button");
  for (var i = 0, ii = elements.length; i < ii; ++i) {
    var element = elements[i];
    element.ontouchstart = onHoverStart;
    element.onmouseover = onHoverStart;

    element.ontouchend = onHoverEnd;
    element.onmouseout = onHoverEnd;
  }

  var headings = document.querySelectorAll("main h1, main h2, main h3, main h4, main h5, main h6");

  var opt = {
    headingClass: 'anchored',
    anchorClass:  'anchor',
    symbol:       '#',
    maxLength:    100
  };

  var elements = this,
      usedNames = [];

  var cleanName = function (name) {
    var cleaned = name.replace(/[^a-z0-9\s]/gi, '')
                      .replace(/[_\s]/g, '-')
                      .replace(/ /g, '-').toLowerCase();
    return cleaned;
  };

  for (var i = 0; i < headings.length; i++) {
    var self = headings[i],
        name = self.innerText,
        count = 1,
        id;

    /**
     *  Strip away unwanted characters
     */
    if(name.length > opt.maxLength) {name = name.substring(0, opt.maxLength);}
    name = cleanName(name);

    /**
     *  Make sure anchor isn't already in use
     */
    if (usedNames[name] >= 1) {
      count = usedNames[name] + 1;
      id = name + '-' + count;
    } else {
      id = name;
    }

    var tag = self["tagName"];
    var symbol = opt.symbol;

    if (tag == 'H2') symbol = symbol+symbol;
    else if (tag == 'H3') symbol = symbol+symbol+symbol;
    else if (tag == 'H4') symbol = symbol+symbol+symbol+symbol;
    else if (tag == 'H5') symbol = symbol+symbol+symbol+symbol+symbol;
    else if (tag == 'H6') symbol = symbol+symbol+symbol+symbol+symbol+symbol;

    /**
     *  Set anchor id and class name
     */
    addClass(self, opt.headingClass);
    self.id = id;

    /**
     *  Append clickable anchor
     */
    self.insertAdjacentHTML('afterbegin', '<a class="' + opt.anchorClass + '" href="#' + id + '" name="'+self.text+'">' + symbol + '</a>');

    /**
     *  Update count of used name
     */
    usedNames[name] = count;

  }
});
