<?php

// FUTURE: Enhance the power of just one time method call
// Template: Stueckbeschreibung
// Check if there's a short description for the play and set it as name"="description" meta tag

$isStueckbeschreibung = $page->template() == 'stueckbeschreibung';
if ($isStueckbeschreibung && !$page->seodescription()->empty()) {
    $description = $page->seodescription()->excerpt(800);
} elseif ($isStueckbeschreibung && !$page->text()->empty()) {
    $description = $page->text()->excerpt(800);
} else {
    $description = $site->description()->excerpt(800);
}

$additionalKeywords = '';
if (!$page->seotags()->isEmpty()) {
    $additionalKeywords = ','.$page->seotags();
}

str_replace('"', '"', $description);
if ($cover = $page->cover()) {
    $pageImage = $cover->thumb(['width' => 1435, 'height' => 750, 'crop' => true], false);
} else {
    $pageImage = site()->images()->find('logo.png')->url();
}

?>

<meta charset="utf-8">

<!-- Standard meta tags -->
<meta name="keywords" content="<?php echo $site->keywords().$additionalKeywords ?>">
<meta name="description" content="<?php echo $description ?>">
<meta name="author" content="<?php echo $site->author() ?>">
<meta name="designer" content="<?php echo $site->designer() ?>">
<meta name="owner" content="<?php echo $site->author() ?>">
<meta name="url" content="<?php echo $site->url() ?>">
<meta name="identifier-URL" content="<?php echo $site->url() ?>">
<meta name="rating" content="General">
<meta name="revisit-after" content="3 days">
<meta name="robots" content="index,follow" />

<!-- Cache control -->
<meta http-equiv="Expires" content="0">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- Standard favicon -->
<link rel="shortcut icon" href="<?php echo url('assets/images/fav-icons/favicon.ico') ?>">

<!-- OpenGraph meta tags -->
<meta property="og:title" content="<?php echo $page->title().' | '.$site->title() ?>"/>
<meta property="og:site_name" content="<?php echo $site->title() ?>"/>
<meta property="og:url" content="<?php echo $page->url() ?>"/>
<meta property="og:description" content="<?php echo $description ?>"/>
<meta property="og:image" content="<?php echo $pageImage ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:locale" content="de_DE" />
<meta property="og:email" content="<?php echo $site->email() ?>"/>
<meta property="og:phone_number" content="<?php echo $site->telephone() ?>"/>
<meta property="og:fax_number" content="<?php echo $site->telefax() ?>"/>
<meta property="og:latitude" content="<?php echo $site->latitude() ?>"/>
<meta property="og:longitude" content="<?php echo $site->longitude() ?>"/>
<meta property="og:street-address" content="<?php echo $site->street() ?>"/>
<meta property="og:locality" content="<?php echo $site->city() ?>"/>
<meta property="og:region" content="<?php echo $site->state() ?>"/>
<meta property="og:postal-code" content="<?php echo $site->zipcode() ?>"/>
<meta property="og:country-name" content="<?php echo $site->land() ?>"/>

<!-- Validation codes -->


<!-- Webapp capability -->
<meta name="apple-mobile-web-app-title" content="<?php echo $site->title() ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">


<!-- App Icons -->
<link rel="apple-touch-icon-precomposed" href="<?php echo url('assets/images/app-icons/iTunesArtwork.png') ?>">

<link rel="apple-touch-icon-precomposed" sizes="29x29" href="<?php echo url('assets/images/app-icons/AppIcon29x29.png') ?>">
<link rel="apple-touch-icon-precomposed" sizes="58x58" href="<?php echo url('assets/images/app-icons/AppIcon29x29@2x.png') ?>">

<link rel="apple-touch-icon-precomposed" sizes="40x40" href="<?php echo url('assets/images/app-icons/AppIcon40x40.png') ?>">
<link rel="apple-touch-icon-precomposed" sizes="80x80" href="<?php echo url('assets/images/app-icons/AppIcon40x40@2x.png') ?>">

<link rel="apple-touch-icon-precomposed" sizes="50x50" href="<?php echo url('assets/images/app-icons/AppIcon50x50.png') ?>">
<link rel="apple-touch-icon-precomposed" sizes="100x100" href="<?php echo url('assets/images/app-icons/AppIcon50x50@2x.png') ?>">

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo url('assets/images/app-icons/AppIcon57x57.png') ?>">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo url('assets/images/app-icons/AppIcon57x57@2x.png') ?>">

<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo url('assets/images/app-icons/AppIcon60x60.png') ?>">
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo url('assets/images/app-icons/AppIcon60x60@2x.png') ?>">

<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo url('assets/images/app-icons/AppIcon72x72.png') ?>">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo url('assets/images/app-icons/AppIcon72x72@2x.png') ?>">

<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo url('assets/images/app-icons/AppIcon76x76.png') ?>">
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo url('assets/images/app-icons/AppIcon76x76@2x.png') ?>">

<!-- Windows 8 / RT icons -->
<meta name="msapplication-TileImage" content="<?php echo url('assets/images/app-icons/AppIcon72x72@2x.png') ?>">
<meta name="msapplication-TileColor" content="#fff">

<!-- webmention plugin -->