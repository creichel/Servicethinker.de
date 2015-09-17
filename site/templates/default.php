<?php snippet('header') ?>
<article class="content-wrap">
  <header class="content-wrap page-header">
    <h1 <?php e($page->titlefont()->isNotEmpty(), 'class="'.$page->titlefont().'"'); ?>><?php echo $page->longtitle()->html(); ?></h1>
  </header>
  <main>
    <?php if($page->text()->isNotEmpty()): ?>
    <article>
      <main>
        <?php echo $page->text()->kirbytext() ?>
      </main>
    </article>
    <?php endif ?>
  </main>
</article>
<?php snippet('footer') ?>