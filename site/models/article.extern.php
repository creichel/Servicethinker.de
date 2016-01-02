<?php

require_once 'default.php';

class ArticleExternPage extends DefaultPage
{
    public function feedtitle()
    {
        return $this->title();
    }

    public function url()
    {
        return parent::articleurl();
    }
}
