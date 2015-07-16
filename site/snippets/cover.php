<?php

$coversrc = false;
$hasCover = false;

$coverHeight = (isset($height) ? $height : '1');

if ($coverImage = $page->cover()) {
  $coversrc = thumb($coverImage, array('width' => 1700, 'upscale' => true, 'crop' => true), false);
  $hasCover = true;
}

?>

<div class="cover" <?php e($coversrc, 'style="background-image: url('.$coversrc.')"') ?>>
  <div class="content-wrap">
    <hr>
    <h1><span><?php echo $page->longtitle()->html(); ?></span></h1>
    <?php e($page->subline()->isNotEmpty(), '<span class="subline">'.$page->subline()->html().'</span>') ?>
  </div>
</div>
<?php e($coversrc, '
    <script type="text/javascript">
    $(".cover").setHeight('.$coverHeight.');
    // Register  the window resize event to resize also the height of the slideshow
    $( window ).resize(function() {$(".cover").setHeight('.$coverHeight.');});
    </script>
  '); ?>