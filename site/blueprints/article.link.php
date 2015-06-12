<?php if(!defined('KIRBY')) exit ?>

title: Link post
pages: false
files: true
  fields:
    caption:
      label: Beschreibung
      type: text
    sourcename:
      label: Quellenangabe
      type: text
      placeholder: Fotograf, Event (optional), Monat/Jahr
    sourceurl:
      label: Link zur Quelle
      type: url
fields:

  articleMeta:
    label: Article Meta
    type: headline
  title:
    label: Title
    type:  text
    width: 1/2
  subline:
    label: Untertitel
    type: text
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
  link Meta:
    label: Link Meta
    type: headline
  customlink:
    label: Customlink
    type:  url
    width: 1/2
  linktitle:
    label: Linktitle
    type:  text
    width: 1/2
    icon:  bookmark

  articleContent:
    label: Article Content
    type: headline
  text:
    label: Text
    type:  markdown
