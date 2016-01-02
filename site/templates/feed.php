<?php

echo page('blog')->children()->visible()->flip()->limit(10)->feed([
  'title'       => $page->title(),
  'description' => $page->description(),
  'link'        => 'blog',
  'datefield'   => 'pubdate',
]);
