<a href="<?php echo $article->url() ?>" target="_blank" class="no-icon">
<article>
  <div class="info">
    <header>
      <strong><?php echo html($article->title()) ?></strong>
    </header>

    <footer class="post-meta">
      <img src="http://www.google.com/s2/favicons?domain=<?php echo parse_url($article->url())["host"] ?>" class="favicon" /><time datetime="<?php echo $article->date('c','pubdate') ?>"><?php echo $article->pubdate()->relative($site->language()); ?></time>
    </footer>
  </div>
  <div class="cover">
    <?php
      if ($coverImage = $article->cover()) echo thumb($coverImage, array('width' => 900, 'height' => 150, 'upscale' => true, 'crop' => true));
    ?>
  </div>
</article>
</a>