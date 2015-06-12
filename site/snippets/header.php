<!DOCTYPE html>
<html lang="de" prefix="og: http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/">
<head>
<title><?php echo html($page->title() . ' | ' . $site->title()) ?></title>

<?php snippet('meta') ?>
<?php snippet('scripts') ?>

</head>
<body class="<?php e(!$page->hasCover(), 'no-cover'); e($pages->findOpen()->hasVisibleChildren(), ' with-children') ?>" id="<?php echo explode('.', $page->template())[0] ?>">

<div id="page-wrap">
  <!--[if lte IE 9]>
  <div class="oldbrowser alert alert-warning content-wrap">
    <div>
       <?php echo $site->lessthanienine()->kirbytext(); ?>
    </div>
  </div>
  <![endif]-->

  <header class="header on-top" id="header">
    <div role="banner" class="banner">
      <a href="<?php echo url() ?>">
        <?php snippet('logo') ?>
      </a>
    </div>
    <?php snippet('mainnav') ?>
    <a id="mainnav-toggle">
      <span alt="Menu">Menu</span>
    </a>
  </header>