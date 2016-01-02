<?php if (!defined('KIRBY')) {
    exit;
} ?>

title: Article
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

  titlefont:
    label: Title Font
    type: select
    options:
      beon: Beon
      dancing-script: Dancing Script
      fira-sans: Fira Sans
      lato: Lato
      helvetia-verbundene: Helvetia Verbundene
      kaushan-script: Kaushan Script
      medio: Medio
      ocra: OCRA
      open-sans: Open Sans
      osifont: osifont
      pressuru: Pressuru
      raleway: Raleway
      simple-print: Simple Print
      tgl: TGL
      unna: Unna
      victors: Victor's Pixel Font

  articleContent:
    label: Article Content
    type: headline
  text:
    label: Text
    type:  markdown
