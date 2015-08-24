<?php if(!defined('KIRBY')) exit ?>

title: Text post
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
  pubdate:
    label:  Date
    type:   date
    width:  1/2
    format: DD.MM.YYYY
  subline:
    label: Untertitel
    type: text
  description:
    label: Description
    type:  text
    icon:  info-circle
  tags:
    label: Tags
    type:  tags

  coverimage:
    label: Coverbild-Auswahl
    type: selector
    mode: single
    options: images
    types:
      - image
    help: Dieses Coverbild wird beim Teilen der Seite auf Facebook angezeigt.
  titlefont:
    label: Titel Font
    type: select
    options:
      beon: Beon
      dancing-script: Dancing Script
      fira-sans: Fira Sans
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
    default: fira-sans
    required: true

  articleContent:
    label: Article Content
    type: headline
  text:
    label: Text
    type:  markdown
