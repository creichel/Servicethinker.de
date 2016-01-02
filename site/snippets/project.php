
<article>
  <div class="info">
    <?php e($project->url()->isNotEmpty(), '<a href="'.$project->url().'" class="no-icon" target="_blank">') ?>
    <header>
      <strong><?php echo html($project->title()) ?></strong>
    </header>
    <?php e($project->url()->isNotEmpty(), '</a>') ?>

    <footer class="post-meta">
      <?php e($project->urltosource()->isNotEmpty(), '<a href="'.$project->urltosource().'" target="_blank" class="icon-github">Source</a><span class="divider"></span>'); ?>
      <time datetime="<?php echo $project->date('c', 'fromdate') ?>"><?php echo $project->date('m/Y', 'fromdate'); ?></time><?php echo $project->todate()->isNotEmpty() ? '<time datetime="'.$project->date('c', 'todate').'"> – '.$project->date('m/Y', 'todate').'</time>' : ' – heute'; ?>
    </footer>
  </div>
  <div class="cover">
    <?php
      if ($coverImage = $project->cover()) {
          echo thumb($coverImage, ['width' => 900, 'height' => 200, 'upscale' => true, 'crop' => true]);
      }
    ?>
  </div>
  <main>
    <?php echo $project->text()->kirbytext(); ?>
  </main>
</article>