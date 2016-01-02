<?php

/*
---------------------------------------
License Setup
---------------------------------------
*/
c::set('license', '');

/*
---------------------------------------
Caching Setup
---------------------------------------
*/
c::set('cache', false);
c::set('cache.ignore', [
  'feed',
]);

/*
---------------------------------------
Locale setup
---------------------------------------
*/
c::set('locale', 'de_DE.UTF8');
c::set('timezone', 'CET');

c::set('languages', [
  [
    'code'    => 'de',
    'name'    => 'Deutsch',
    'default' => true,
    'locale'  => 'de_DE',
    'url'     => '',
  ],
  [
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'url'     => '/en',
  ],
]);

c::set('language.detect', true);

/*
---------------------------------------
Site setup
---------------------------------------
*/
c::set('debug', true);

/*
---------------------------------------
Routes setup
---------------------------------------
*/
c::set('routes', [
  [
    'pattern' => '(:num)/(:num)/(:num)/(:any)',
    'action'  => function ($year, $month, $day, $uid) {

      // search for the article
      $page = page('articles/'.$uid);

      // redirect to the article or the error page
      go($page ? $page->url() : 'error');

    },
  ],
  [
    'pattern' => 'de/(:all)',
    'action'  => function ($uid) {
      return go($uid);
    },
  ],
]);

/*
---------------------------------------
Plugins
---------------------------------------
 */
c::set('footnotes.global', true);
c::set('footnotes.smoothscroll', true);
c::set('footnotes.offset', 300);
c::set('footnotes.merge', true);
c::set('footnotes.templates.ignore', [
  'feed',
]);

c::set('columns.container', 'row');
c::set('columns.item', 'column');
c::set('columns.breakpoint', 'medium');
c::set('columns.gridsize', 12);

c::set('relativedate.fuzzy', true);

c::set('panelbar.enhancedJS', true);
c::set('panelbar.position', 'bottom');
