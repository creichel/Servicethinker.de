<article>
  <div>
    <header>
      <strong><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></strong>
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
  <?php if($article->tags() != ''): ?>
  <?php foreach(str::split($article->tags()) as $moretag): ?>
    <?php if ($moretag == $tag) echo '<mark>'; ?><a href="<?php echo $page->url().'/tag:' . urlencode($moretag) ?>" class="tag"><?php echo $moretag; ?></a><?php if ($moretag == $tag) echo '</mark>' ?>
  <?php endforeach ?>
  <?php endif ?>
</article>