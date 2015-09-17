<?php
  $page = page('articles');
?>
<section>

  <?php

    if(param('tag')) {
      $tag = urldecode(param('tag'));
      $articles =  page('articles')->children()
                        ->visible()
                        ->filterBy('tags', $tag, ',')
                        ->flip();

      echo '<h1 class="result">Artikel mit <a href="'.url().'" title="Tag löschen"><mark>' , $tag , '</mark></a>":</h1>';

      foreach($articles as $article) {
        snippet('article.result', array('article' => $article, 'tag' => $tag));
      }
    }

    else {// show latest articles
      echo '<h1>'.$page->title().'</h1>'; ?>
      <main>
        <?php echo $page->text()->kirbytext() ?>
      </main>
      <?php
      $articles = page('articles')->children()->visible()->flip();

      foreach($articles as $article) { // article overview
        if($article->template() == 'article') { // text posts
          snippet('article', array('article' => $article)); }
        else if($article->template() == 'article.extern') {// link posts
          snippet('article.extern', array('article' => $article));}

      } // article overview ends
    }
  ?>
</section>