<a href="<?php echo $article->url() ?>">
<article>
  <div class="info">
    <header>
      <strong><?php echo html($article->title()) ?></strong>
    </header>

    <footer class="post-meta">
      <time datetime="<?php echo $article->date('c','pubdate') ?>"><?php echo $article->pubdate()->relative($site->language()); ?></time>
    </footer>
  </div>
  <div class="cover">
    <?php
      if ($coverImage = $article->cover()) echo thumb($coverImage, array('width' => 900, 'height' => 150, 'upscale' => true, 'crop' => true));
    ?>
  </div>
</article>
</a>