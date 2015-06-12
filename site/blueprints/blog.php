<?php if(!defined('KIRBY')) exit ?>

title: Blog
pages:
  limit: 10
  sort: flip
  num:
    mode: date
    field: pubdate
    format: Ymd
  template:
    - article.text
    - article.link
    - article.short
files: true
fields:

  pageMeta:
    label: Page Meta
    type: headline
  title:
    label: Title
    type:  text
  text:
    label: Vorwort
    type: markdown
