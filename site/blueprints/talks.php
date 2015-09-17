<?php if(!defined('KIRBY')) exit ?>

title: Talks
pages:
  sort: flip
  num:
    mode: date
    field: pubdate
    format: Ymd
  template:
    - talk
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Introduction to this section
    type: markdown