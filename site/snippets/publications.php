<?php
  $page = page('publications');
?>
<section>

  <?php

    if(param('tag')) {
      $tag = urldecode(param('tag'));
      $publications =  page('publications')->children()
                        ->visible()
                        ->filterBy('tags', $tag, ',')
                        ->flip();

      echo '<h1 class="result">publications mit <a href="'.url().'" title="Tag löschen"><mark>' , $tag , '</mark></a>":</h1>';

      foreach($publications as $publication) {
        snippet('publication.result', array('publication' => $publication, 'tag' => $tag));
      }
    }

    else {// show latest publications
      echo '<h1>'.$page->title().'</h1>'; ?>
      <main>
        <?php echo $page->text()->kirbytext() ?>
      </main>
      <?php
      $publications = page('publications')->children()->visible()->flip();

      foreach($publications as $publication) {
        snippet('publication', array('publication' => $publication));
      }
    }
  ?>
</section>