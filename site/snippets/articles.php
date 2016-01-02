<?php
  $page = page('blog');

  $heading = isset($heading) ? $heading : true;
?>
<section>

  <?php

    if (param('tag')) {
        $tag = urldecode(param('tag'));
        $articles = $page->children()
                        ->visible()
                        ->filterBy('tags', $tag, ',')
                        ->flip();

        echo '<h1 class="result">Artikel mit <a href="'.url().'" title="Tag löschen"><mark>' , $tag , '</mark></a>":</h1>';

        foreach ($articles as $article) {
            snippet('article.result', ['article' => $article, 'tag' => $tag]);
        }
    } else {// show latest articles
      if ($heading) {
          echo '<h1>'.$page->title().'</h1>';
      }
        ?>
      <main>
        <?php echo $page->text()->kirbytext() ?>
      </main>
      <?php
      $articles = $page->children()->visible()->flip();

        foreach ($articles as $article) { // article overview
        if ($article->template() == 'article') { // text posts
          snippet('article', ['article' => $article]);
        } elseif ($article->template() == 'article.extern') {// link posts
          snippet('article.extern', ['article' => $article]);
        }
        } // article overview ends
    }
  ?>
</section>