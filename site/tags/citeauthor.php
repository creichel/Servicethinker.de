<?php

kirbytext::$tags['citeauthor'] = array(
  'html' => function($tag) {
    return '<footer>
            <cite>' . markdown($tag->attr('citeauthor')) . '</cite>
            </footer>';
  }
);