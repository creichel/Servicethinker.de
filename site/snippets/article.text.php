<article>
  <header>
    <?php
    if ($coverImage = $article->cover()) echo thumb($coverImage, array('width' => 900, 'height' => 300, 'upscale' => true, 'crop' => true));
    ?>
    <h3><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>
    <?php e($article->subline()->isNotEmpty(), '<span class="subline">'.$article->subline()->html().'</span>') ?>
  </header>
<!--   <section>
    <p><?php // echo excerpt($article->text(), 400) ?></p>
  </section> -->
  <footer class="post-meta">
    <a href="<?php echo $article->url() ?>">Weiterlesen</a><span class="divider"></span>
    <time datetime="<?php echo $article->date('c','pubdate') ?>"><?php echo $article->pubdate()->relative($site->language()); ?></time>
    <span class="divider"></span><span class="icon-clock-o"></span> <?php echo $article->text()->readingtime(array(
  'minute'  => 'Minute',
  'minutes' => 'Minuten',
  'second'  => 'Sekunde',
  'seconds' => 'Sekunden',
  'format' => '{minutesCount} {minutesLabel}, {secondsCount} {secondsLabel}',
  'format.alt' => '{secondsCount} {secondsLabel}',
  'format.alt.enable' => true
)) ?>
<!--     <?php if($article->tags() != ''): ?><br />In
      <?php foreach(str::split($article->tags()) as $tag): ?>
        <a href="<?php echo $page->url().'/tag:' . urlencode($tag) ?>" class="tag"><?php echo $tag; ?></a>
      <?php endforeach ?>
    <?php endif ?> -->
  </footer>
</article>