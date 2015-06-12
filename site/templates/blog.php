<?php snippet('header') ?>
<?php snippet('cover') ?>
<main role="main">

  <?php

  if(param('tag')): // show tag results ?>
  <?php $tag = urldecode(param('tag'));
        $articles =  $page->children()
                          ->visible()
                          ->filterBy('tags', $tag, ',')
                          ->flip()
                          ->paginate(10);

        echo '<h2 class="result">Artikel mit “<mark>' , $tag , '</mark>”:</h2><hr>'
  ?>

  <?php foreach($articles as $article): ?>

    <article>
      <header>
        <h3><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>
        <?php e($page->subline()->isNotEmpty(), '<span class="subline">'.$page->subline()->html().'</span>') ?>
      </header>
      <footer class="post-meta">
        <time datetime="<?php echo $article->pubdate('c') ?>"><?php echo $article->pubdate('F dS, Y')->relative(); ?></time>
        <?php if($article->tags() != ''): ?> in
        <?php foreach(str::split($article->tags()) as $moretag): ?>
          <?php if ($moretag == $tag) echo '<mark>'; ?>
          <a href="<?php echo $page->url().'/tag:' . urlencode($moretag) ?>" class="tag"><?php echo $moretag; ?></a><?php if ($moretag == $tag) echo '</mark>' ?>
        <?php endforeach ?>
        <?php endif ?>
      </footer>
    </article>
    <?php endforeach ?>

  <?php else: // show latest articles ?>

  <?php $articles = $page->children()->visible()->flip()->paginate(10) ?>

  <?php foreach($articles as $article): // article overview ?>

  <?php if($article->template() == 'article.text'): // text posts ?>
  <article>
    <header>
      <?php
      if ($coverImage = $article->cover()) echo thumb($coverImage, array('width' => 900, 'height' => 300, 'upscale' => true, 'crop' => true));
      ?>
      <h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
      <?php e($article->subline()->isNotEmpty(), '<span class="subline">'.$article->subline()->html().'</span>') ?>
    </header>
    <section>
      <p><?php echo excerpt($article->text(), 400) ?></p>
    </section>
    <footer class="post-meta">
      <a href="<?php echo $article->url() ?>">Weiterlesen</a><span class="divider"></span>
      <time datetime="<?php echo $article->date('c','pubdate') ?>"><?php echo $article->pubdate()->relative($site->language()); ?></time>
      <?php if($article->tags() != ''): ?> in
      <?php foreach(str::split($article->tags()) as $tag): ?>
        <a href="<?php echo $page->url().'/tag:' . urlencode($tag) ?>" class="tag"><?php echo $tag; ?></a>
      <?php endforeach ?>
      <?php endif ?><span class="divider"></span>Geschätzte Lesezeit: <?php echo $article->text()->readingtime(array(
    'minute'  => 'Minute',
    'minutes' => 'Minuten',
    'second'  => 'Sekunde',
    'seconds' => 'Sekunden',
    'format' => '{minutesCount} {minutesLabel}, {secondsCount} {secondsLabel}',
    'format.alt' => '{secondsCount} {secondsLabel}',
    'format.alt.enable' => true
)) ?>
    </footer>
  </article>

  <?php elseif($article->template() == 'article.link'): // link posts ?>
  <article>
    <header>
      <?php
      if ($coverImage = $article->cover()) echo thumb($coverImage, array('width' => 900, 'height' => 300, 'upscale' => true, 'crop' => true));
      ?>
      <h2><a href="<?php echo $article->customlink() ?>" target="_blank"><?php echo html($article->linktitle()) ?></a></h2>
      <?php e($article->subline()->isNotEmpty(), '<span class="subline">'.$article->subline()->html().'</span>') ?>
    </header>
    <section>
      <?php echo $article->text()->kirbytext() ?>
    </section>
    <footer class="post-meta">
      <a href="<?php echo $article->customlink() ?>" target="_blank">Link öffnen</a><span class="divider"></span>
      <time datetime="<?php echo $article->date('c','pubdate') ?>"><?php echo $article->pubdate()->relative($site->language()); ?></time>
      <?php if($article->tags() != ''): ?> in
      <?php foreach(str::split($article->tags()) as $tag): ?>
        <a href="<?php echo $page->url().'/tag:' . urlencode($tag) ?>" class="tag"><?php echo $tag; ?></a>
      <?php endforeach ?>
      <?php endif ?><span class="divider"></span>Geschätzte Lesezeit: <?php echo $article->text()->readingtime(array(
    'minute'  => 'Minute',
    'minutes' => 'Minuten',
    'second'  => 'Sekunde',
    'seconds' => 'Sekunden',
    'format' => '{minutesCount} {minutesLabel}, {secondsCount} {secondsLabel}',
    'format.alt' => '{secondsCount} {secondsLabel}',
    'format.alt.enable' => true
)) ?>
    </footer>
  </article>

  <?php elseif($article->template() == 'article.short'): // video posts ?>

  <article>
    <header>
      <?php
      if ($coverImage = $article->cover()) echo thumb($coverImage, array('width' => 900, 'height' => 300, 'upscale' => true, 'crop' => true));
      ?>
      <h2><?php echo html($article->title()) ?></h2>
      <?php e($article->subline()->isNotEmpty(), '<span class="subline">'.$article->subline()->html().'</span>') ?>
    </header>
    <section>
      <?php echo $article->text()->kirbytext() ?>
    </section>
    <footer class="post-meta"><a href="<?php echo $article->url() ?>">Permalink</a><span class="divider"></span>
      <time datetime="<?php echo $article->date('c','pubdate') ?>"><?php echo $article->pubdate()->relative(); ?></time>
      <?php if($article->tags() != ''): ?> in
      <?php foreach(str::split($article->tags()) as $tag): ?>
        <a href="<?php echo $page->url().'/tag:' . urlencode($tag) ?>" class="tag"><?php echo $tag; ?></a>
      <?php endforeach ?>
      <?php endif ?><span class="divider"></span>Geschätzte Lesezeit: <?php echo $article->text()->readingtime(array(
    'minute'  => 'Minute',
    'minutes' => 'Minuten',
    'second'  => 'Sekunde',
    'seconds' => 'Sekunden',
    'format' => '{minutesCount} {minutesLabel}, {secondsCount} {secondsLabel}',
    'format.alt' => '{secondsCount} {secondsLabel}',
    'format.alt.enable' => true
)) ?>
    </footer>
  </article>
  <?php endif ?>

  <?php endforeach // article overview ends ?>


  <?php endif ?>


  <?php if($articles->pagination()->hasPages()): // pagination 

  $pagination = $articles->pagination();
  ?>
  <nav class="pagination">
    <ul>

      <?php if($pagination->hasPrevPage()): ?>
      <li><a class="button previous" href="<?php echo $pagination->prevPageURL() ?>">Neuer</a></li>
      <?php else: ?>
      <li><span class="button previous disabled">Neuere Posts</span></li>
      <?php endif ?>

      <?php if($pagination->hasNextPage()): ?>
      <li><a class="button next" href="<?php echo $pagination->nextPageURL() ?>">Älter</a></li>
      <?php else: ?>
      <li><span class="button next disabled">Ältere Posts</span></li>
      <?php endif ?>

    </ul>
  </nav>
  <?php endif ?>

</main>
<?php snippet('footer') ?>