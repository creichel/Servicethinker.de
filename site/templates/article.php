<?php snippet('header', ['d3' => true, 'hljs' => true]) ?>
<div class="content-wrap">
  <article>
    <header class="page-header">
      <h1 <?php e($page->titlefont()->isNotEmpty(), 'class="'.$page->titlefont().'"'); ?>><?php echo $page->longtitle()->html(); ?></h1>
    </header>
    <main>
      <?php echo $page->text()->kirbytext(); ?>
    </main>
    <footer class="post-meta">
      Am <time datetime="<?php echo $page->date('c', 'pubdate') ?>"><?php echo $page->date('d.m.Y', 'pubdate'); ?></time>
      <?php if ($page->tags() != ''): ?> in
      <?php foreach (str::split($page->tags()) as $tag): ?>
        <a href="<?php echo url().'/tag:'.urlencode($tag) ?>" class="tag"><?php echo $tag; ?></a>
      <?php endforeach ?>
      <?php endif ?>
    </footer>
  </article>
</div>

<?php snippet('footer') ?>