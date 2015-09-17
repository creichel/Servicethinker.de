<?php snippet('header') ?>
<article class="content-wrap">
  <header class="content-wrap page-header">
    <h1 <?php e($page->titlefont()->isNotEmpty(), 'class="'.$page->titlefont().'"'); ?>><?php echo $page->longtitle()->html(); ?><span class="blinkingcursor"></span></h1>
  </header>
  <main>
    <?php if($page->text()->isNotEmpty()): ?>
    <article>
      <main>
        <?php echo $page->text()->kirbytext() ?>
      </main>
    </article>
    <?php endif ?>
    <?php snippet('articles') ?>
    <?php snippet('talks') ?>
    <?php snippet('publications') ?>
    <?php snippet('projects') ?>
    <?php snippet('accounts') ?>
  </main>
</article>
<?php snippet('footer') ?>