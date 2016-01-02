<div class="content-wrap">
  <nav class="breadcrumb">
    <ul>
      <?php foreach ($site->breadcrumb() as $crumb): ?>
        <?php if ($crumb->uid() == 'home'): ?>
        <li><a href="<?php echo $crumb->url() ?>"<?php e($crumb->isActive(), ' class="active"') ?>><span class="icon-home"></span></a></li>
        <?php else: ?>
        <li><span class="icon-angle-right"> </span><a href="<?php echo $crumb->url() ?>"<?php e($crumb->isActive(), ' class="active"') ?>><?php echo $crumb->title()->html() ?></a></li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </nav>
</div>