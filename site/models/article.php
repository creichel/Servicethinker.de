<?php

require_once('default.php');

class ArticlePage extends DefaultPage {
	public function feedtitle() {
    return (parent::subline()->isEmpty() ? $this->title() : $this->title() . ' - ' . parent::subline());
  }
}

?>