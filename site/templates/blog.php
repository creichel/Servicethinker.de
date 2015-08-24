<?php snippet('header') ?>
<?php snippet('cover') ?>
<div class="content-wrap">

  <?php

  if(param('tag')) { 
    $tag = urldecode(param('tag'));
    $articles =  $page->children()
                      ->visible()
                      ->filterBy('tags', $tag, ',')
                      ->flip()
                      ->paginate(10);

    echo '<h2 class="result">Artikel mit “<mark>' , $tag , '</mark>”:</h2><hr>';

    foreach($articles as $article) {
      snippet('blog.result', array('article' => $article, 'tag' => $tag));
    }
  }

  else {// show latest articles 

    $articles = $page->children()->visible()->flip()->paginate(10);

    foreach($articles as $article) { // article overview

      if($article->template() == 'article.text') { // text posts
        snippet('article.text', array('article' => $article)); }
      else if($article->template() == 'article.link') {// link posts
        snippet('article.link', array('article' => $article));}
      else if($article->template() == 'article.short') { // short posts
        snippet('article.short', array('article' => $article));}

    } // article overview ends
  }
  ?>


  <?php if($articles->pagination()->hasPages()): // pagination 

  $pagination = $articles->pagination();
  ?>
  <nav class="pagination">
    <ul>

      <?php if($pagination->hasPrevPage()): ?>
      <li><a class="button previous" href="<?php echo $pagination->prevPageURL() ?>">Neuer</a></li>
      <?php else: ?>
      <li><span class="button previous disabled">Neuere Posts</span></li>
      <?php endif ?>

      <?php if($pagination->hasNextPage()): ?>
      <li><a class="button next" href="<?php echo $pagination->nextPageURL() ?>">Älter</a></li>
      <?php else: ?>
      <li><span class="button next disabled">Ältere Posts</span></li>
      <?php endif ?>

    </ul>
  </nav>
  <?php endif ?>

</div>
<?php snippet('footer') ?>