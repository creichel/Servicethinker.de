<?php

class DefaultPage extends Page {

  public function cover() {
    if ($this->coverimage()->isEmpty() || $this->hasImages() == false) return false;
    return $this->images()->get($this->coverimage()->value);
  }

  public function hasCover() {
    if ($this->cover() == false) return false;
    else return true;
  }

  public function longtitle() {
    return (parent::alttitle()->isEmpty() ? $this->title() : parent::alttitle());
  }

}