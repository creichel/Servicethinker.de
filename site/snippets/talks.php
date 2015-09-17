<?php
  $page = page('talks');
  function getNameFromURL($url){

    $pieces = parse_url($url);
    $domain = isset($pieces['host']) ? $pieces['host'] : '';
    if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
      return explode('.',$regs['domain'])[0];
    }
    return false;
  }

?>
<section>

  <?php

    if(param('tag')) {
      $tag = urldecode(param('tag'));
      $talks =  page('talks')->children()
                        ->visible()
                        ->filterBy('tags', $tag, ',')
                        ->flip();

      echo '<h1 class="result">Talks mit <a href="'.url().'" title="Tag löschen"><mark>' , $tag , '</mark></a>":</h1>';

      foreach($talks as $talk) {
        snippet('talk.result', array('talk' => $talk, 'tag' => $tag));
      }
    }

    else {// show latest talks
      echo '<h1>'.$page->title().'</h1>'; ?>
      <main>
        <?php echo $page->text()->kirbytext() ?>
      </main>
      <?php
      $talks = page('talks')->children()->visible()->flip();

      foreach($talks as $talk) {
        snippet('talk', array('talk' => $talk));
      }
    }
  ?>
</section>