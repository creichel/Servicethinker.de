<?php

require_once 'default.php';

class TalkPage extends DefaultPage
{
    public function feedtitle()
    {
        return $this->title();
    }

    public function url()
    {
        return parent::slides();
    }
}
