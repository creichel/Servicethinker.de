<?php

$items = false;

// get the open item on the first level
if ($root = $pages->findOpen()) {

  // get visible children for the root item
  $items = $root->children()->visible();
}

// only show the menu if items are available
if ($items and $items->count()):

?>
<nav class="subnav">
  <div class="content-wrap">
  <ul>
    <?php
    foreach ($items as $item):
    ?>
    <li<?php e($item->isOpen(), ' class="active"') ?>><a href="<?php echo $item->url() ?>"><?php echo $item->title()->html(); ?></a></li>
    <?php endforeach ?>
  </ul>
  </div>
</nav>
<?php endif ?>