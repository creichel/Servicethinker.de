<?php snippet('header') ?>
<?php snippet('cover') ?>
<?php snippet('subnav') ?>
<main role="main">
  <article>
    <?php echo $page->text()->kirbytext(); ?>
  </article>
</main>
<?php snippet('footer') ?>