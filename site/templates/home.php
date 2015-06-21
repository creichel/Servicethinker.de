<?php snippet('header') ?>
<?php snippet('cover', array('height' => '1')) ?>
<div class="content-wrap">
  <?php if($page->text()->isNotEmpty()): ?>
  <article>
    <main>
      <?php echo $page->text()->kirbytext() ?>
    </main>
  </article>
  <hr>
  <?php endif ?>
  <article id="accounts">
    <h2><?php echo $page->accounts()->html() ?></h2>
    <ul>
      <?php foreach($site->accounts()->toStructure() as $account): ?>
      <li>
        <a href="<?php echo $account->url() ?>" target="_blank" class="icon-<?php echo $account->name() ?>" title="<?php echo $account->name() ?>">
        </a>
      </li>
      <?php endforeach ?>
    </ul>
  </article>
</div>
  <script type="text/javascript">

  if(("standalone" in window.navigator) && window.navigator.standalone){

    var noddy, remotes = false;

    document.addEventListener('click', function(event) {

      noddy = event.target;

      while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
        noddy = noddy.parentNode;
      }

      if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
      {
        event.preventDefault();
        document.location.href = noddy.href;
      }

    },false);
  }
  </script>
</body>
</html>