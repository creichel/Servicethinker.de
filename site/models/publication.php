<?php

require_once('default.php');

class PublicationPage extends DefaultPage {
  public function url() {
    $pdf = parent::files()->filterBy('extension', 'pdf')->first();
    return ($pdf->isNotEmpty() ? $pdf->url() : (parent::urltopdf()->isNotEmpty() ? parent::urltopdf() : false));
  }
}