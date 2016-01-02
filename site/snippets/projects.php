<?php
  $page = page('projects');
?>
<section>

  <?php

    if (param('tag')) {
        $tag = urldecode(param('tag'));
        $projects = page('projects')->children()
                        ->visible()
                        ->filterBy('tags', $tag, ',')
                        ->flip();

        echo '<h1 class="result">projects mit <a href="'.url().'" title="Tag löschen"><mark>' , $tag , '</mark></a>":</h1>';

        foreach ($projects as $project) {
            snippet('project.result', ['project' => $project, 'tag' => $tag]);
        }
    } else {// show latest projects
      echo '<h1>'.$page->title().'</h1>';
        ?>
      <main>
        <?php echo $page->text()->kirbytext() ?>
      </main>
      <?php
      $projects = page('projects')->children()->visible()->flip();

        foreach ($projects as $project) {
            snippet('project', ['project' => $project]);
        }
    }
  ?>
</section>