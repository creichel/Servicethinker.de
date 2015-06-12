<?php if(!isset($subpages)) $subpages = $site->children();

$subpages = $subpages->not('galerie')->not('pressestimmen')->not('zuschauerstimmen')->not('spenden')->not('error')->not('sitemap');

?>
<ul>
  <?php foreach($subpages AS $p): ?>
  <li class="depth-<?php echo $p->depth() ?>">
    <a<?php e($p->isActive(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo ($p->shorttitle()->empty())? $p->title()->html() : $p->shorttitle()->html() ?></a>
    <?php if($p->hasChildren()): ?>
    <?php snippet('treenav', array('subpages' => $p->children())) ?>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>