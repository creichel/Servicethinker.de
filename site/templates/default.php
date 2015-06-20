<?php snippet('header') ?>
<?php snippet('cover') ?>
<?php snippet('subnav') ?>
<div class="content-wrap">
  <article>
    <?php echo $page->text()->kirbytext(); ?>
  </article>
</div>
<?php snippet('footer') ?>