<?php snippet('header') ?>
<?php snippet('cover') ?>

<?php 

$coversource = "";

if ($cover = $page->cover()){
  if ($cover->sourcename()->isNotEmpty() || $cover->sourceurl()->isNotEmpty()) {
    $coversource .= '[999. <no> Titelbild: ';
    if ($cover->sourcename()->isNotEmpty()) $coversource .= $cover->sourcename();
    if ($cover->sourceurl()->isNotEmpty()) $coversource .= ' (link: '.$cover->sourceurl().' text: Zur Quelle popup: yes)';
    $coversource .= ']';
  }
}

?>


<div class="content-wrap">
  <article>
    <main>
      <?php echo kirbytext($page->text()) ?>
    </main>
    <hr>
    <footer class="post-meta">
      Am <time datetime="<?php echo $page->date('c','pubdate') ?>"><?php echo $page->date('d.m.Y','pubdate'); ?></time>
      <?php if($page->tags() != ''): ?> in
      <?php foreach(str::split($page->tags()) as $tag): ?>
        <a href="<?php echo $page->parent()->url().'/tag:' . urlencode($tag) ?>" class="tag"><?php echo $tag; ?></a>
      <?php endforeach ?>
      <?php endif ?>
    </footer>
    <?php snippet('disqus', array('disqus_shortname' => 'servicethinking')) ?>
  </article>
  <footer>
      <a class="button icon-angle-left" href="<?php echo $page->parent()->url() ?>">Zurück zum Blog</a>
    </footer>

</div>

<?php snippet('footer') ?>