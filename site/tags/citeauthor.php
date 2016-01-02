<?php

kirbytext::$tags['citeauthor'] = [
  'html' => function ($tag) {
    return '<footer>
            <cite>'.markdown($tag->attr('citeauthor')).'</cite>
            </footer>';
  },
];
