<article>
  <header>
    <h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
    <?php e($page->subline()->isNotEmpty(), '<span class="subline">'.$page->subline()->html().'</span>') ?>
  </header>
  <footer class="post-meta">
    <time datetime="<?php echo $article->pubdate('c') ?>"><?php echo $article->pubdate('F dS, Y')->relative(); ?></time>
    <?php if($article->tags() != ''): ?><br />In
    <?php foreach(str::split($article->tags()) as $moretag): ?>
      <?php if ($moretag == $tag) echo '<mark>'; ?><a href="<?php echo $page->url().'/tag:' . urlencode($moretag) ?>" class="tag"><?php echo $moretag; ?></a><?php if ($moretag == $tag) echo '</mark>' ?>
    <?php endforeach ?>
    <?php endif ?>
  </footer>
</article>