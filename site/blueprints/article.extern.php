<?php if (!defined('KIRBY')) {
    exit;
} ?>

title: Extern Article
pages: false
files: true
  fields:
    caption:
      label: Caption
      type: text
    sourcename:
      label: Source informations
      type: text
      placeholder: Photograph, Event (optional), Month/Year
    sourceurl:
      label: URL to source
      type: url

fields:

  articleMeta:
    label: Article Meta
    type: headline
  title:
    label: Title
    type:  text
    width: 1/2
  pubdate:
    label:  Date
    type:   date
    width:  1/2
    format: DD.MM.YYYY
  description:
    label: Description
    type:  text
    icon:  info-circle
  tags:
    label: Tags
    type:  tags

  coverimage:
    label: Cover image
    type: selector
    mode: single
    options: images
    types:
      - image

  articleContent:
    label: Article Content
    type: headline
  articleurl:
    label: URL to article
    type: url
