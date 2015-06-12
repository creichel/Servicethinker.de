<?php

kirbytext::$tags['image'] = array(
  'attr' => array(
    'caption'
  ),
  'html' => function($tag) {

    $file     = $tag->file($tag->attr('image'));
    $caption  = ($file->caption()->isNotEmpty() ? $file->caption() : $tag->attr('caption'));
    $thumb    = thumb($file, array('width' => 1700), false);

    $html  = '<figure>';
    $html .= '<img src="'.$thumb.'" alt="'.$file->name().'">';

    if ($caption != "" || $file->sourcename()->isNotEmpty() || $file->sourceurl()->isNotEmpty()) {
      $html .= '<figcaption>';
      $html .= $caption;
      if ($file->sourcename()->isNotEmpty() || $file->sourceurl()->isNotEmpty()) {
        $html .= '[1000. Bild: ';
        if ($file->sourcename()->isNotEmpty()) $html .= $file->sourcename();
        if ($file->sourceurl()->isNotEmpty()) $html .= ' (link: '.$file->sourceurl().' text: Zur Quelle popup: yes)';
        $html .= ']';
      }
      $html .= '</figcaption>';
    }

    $html .= '</figure>';

    return $html;
  }
);