<article>
  <div class="info">
    <header>
      <strong><?php
        e($talk->event()->isNotEmpty(), $talk->event().': ');
        echo html($talk->title())
      ?>
      </strong>
    </header>

    <footer class="post-meta">
      <a href="<?php echo $talk->url() ?>" target="_blank" class="icon-<?php echo getNameFromURL(parse_url($talk->url())) ?>">Slides</a>
      <?php
        e($talk->video()->isNotEmpty(), ' & <a href="'.$talk->video().'" target="_blank" class="no-icon">Video</a>');
        e($talk->audio()->isNotEmpty(), ' & <a href="'.$talk->audio().'" target="_blank" class="no-icon">Audio</a>');
      ?>
      <span class="divider"></span>
      <time datetime="<?php echo $talk->date('c','pubdate') ?>"><?php echo $talk->pubdate()->relative($site->language()); ?></time>
    </footer>
  </div>
  <div class="cover">
    <?php
      if ($coverImage = $talk->cover()) echo thumb($coverImage, array('width' => 900, 'height' => 200, 'upscale' => true, 'crop' => true));
    ?>
  </div>
</article>