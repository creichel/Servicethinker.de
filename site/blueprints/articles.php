<?php if (!defined('KIRBY')) {
    exit;
} ?>

title: Articles
pages:
  sort: flip
  num:
    mode: date
    field: pubdate
    format: Ymd
  template:
    - article
    - article.extern
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Introduction to this section
    type: markdown
