<div id="accounts">
  <h1><?php echo page('accounts')->title()->html() ?></h1>
  <main>
    <?php echo page('accounts')->text()->kirbytext() ?>
  </main>
  <ul>
    <?php foreach (page('accounts')->accounts()->toStructure() as $account): ?>
    <li>
      <a href="<?php echo $account->url() ?>" rel="me" target="_blank" class="icon-<?php echo $account->name() ?>" title="<?php echo $account->name() ?>">
        <?php echo $account->name(); ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</div>