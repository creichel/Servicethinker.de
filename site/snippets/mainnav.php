<?php

// main menu items
$items = $pages->visible();

// only show the menu if items are available
if($items->count()):
?>
<nav class="mainnav" role="navigation">
  <ul>
    <?php
    foreach($items as $item):
    ?>
    <li<?php e($item->isOpen(), ' class="active"') ?>><a href="<?php echo $item->url() ?>" <?php echo ($item->template() == 'external' && $item->newwindow() == 'true' ? 'target="_blank"' : 'target="_self"'); ?>><?php echo $item->title() ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>
<?php endif ?>