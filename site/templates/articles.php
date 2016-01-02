<?php snippet('header') ?>
<article class="content-wrap">
  <header class="content-wrap page-header">
    <h1 <?php e($page->titlefont()->isNotEmpty(), 'class="'.$page->titlefont().'"'); ?>><?php echo $page->longtitle()->html(); ?></h1>
  </header>
  <main>
    <?php snippet('articles', ['heading' => false]) ?>
  </main>
</article>
<?php snippet('footer') ?>