<article>
  <div class="info">
    <header>
      <strong><?php
        e($publication->event()->isNotEmpty(), $publication->event().': ');
        echo html($publication->title())
      ?>
      </strong>
    </header>

    <footer class="post-meta">
      <?php
        e($url = $publication->url(), '<a href="'.$url.'" target="_blank" class="icon-file-pdf-o">PDF</a>');
        e($publication->urltobook()->isNotEmpty(), ' & <a href="'.$publication->urltobook().'" target="_blank" class="icon-book">Book</a>');
      ?>
      <span class="divider"></span>
      <time datetime="<?php echo $publication->date('c','pubdate') ?>"><?php echo $publication->pubdate()->relative($site->language()); ?></time>
    </footer>
  </div>
  <div class="cover">
    <?php
      if ($coverImage = $publication->cover()) echo thumb($coverImage, array('width' => 900, 'height' => 200, 'upscale' => true, 'crop' => true));
    ?>
  </div>
</article>