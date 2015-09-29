<?php

require_once('default.php');

class HomePage extends DefaultPage {
  public function hovercover() {
    $hovercover = $this->images()->findBy('ishover', '1');
    if (!$hovercover || $this->hasImages() == false) return false;
    return $hovercover;
  }
}

?>