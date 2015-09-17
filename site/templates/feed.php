<?php

echo page('articles')->children()->visible()->flip()->limit(10)->feed(array(
  'title'       => $page->title(),
  'description' => $page->description(),
  'link'        => 'articles',
  'datefield'   => 'pubdate'
));

?>