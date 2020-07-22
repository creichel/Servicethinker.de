
<!DOCTYPE html>
<html lang="de" prefix="og: http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/">
<head>
<title><?php echo html($page->title().' | '.$site->title()) ?></title>

<?php snippet('meta') ?>
<?php
  $d3 = isset($d3) ? $d3 : false;
  $hljs = isset($hljs) ? $hljs : false;

  snippet('scripts', ['d3' => $d3, 'hljs' => $hljs]);
?>

</head>
<body class="<?php e($pages->findOpen()->hasListedChildren(), ' with-children') ?>" id="<?php echo explode('.', $page->template())[0] ?>">
<!--?php echo panelbar::show(); ?-->
<div id="page-wrap">
  <!--[if lte IE 9]>
  <div class="oldbrowser alert alert-warning content-wrap">
    <div>
       <?php echo $site->lessthanienine()->kirbytext(); ?>
    </div>
  </div>
  <![endif]-->

<header class="header content-wrap" id="header">
<?php
  if (!$page->isHomePage()): ?>
  <a class="button ghost icon-angle-left" href="<?php echo url() ?>" alt="Go back to the start page"></a>
<?php endif ?>
</header>