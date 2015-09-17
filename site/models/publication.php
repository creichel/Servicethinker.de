<?php

require_once('default.php');

class PublicationPage extends DefaultPage {
  public function url() {
    return parent::files()->first()->extension() == "pdf" ? parent::files()->first()->url() : (parent::urltopdf()->isNotEmpty() ? parent::urltopdf() : false);
  }
}