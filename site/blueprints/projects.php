<?php if (!defined('KIRBY')) {
    exit;
} ?>

title: Projects
pages:
  sort: flip
  num:
    mode: date
    field: fromdate
    format: Ymd
  template:
    - project
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Some words to your projects
    type: markdown