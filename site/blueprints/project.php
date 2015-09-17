<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
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
  projectMeta:
    label: Project Meta
    type: headline
  title:
    label: Title
    type:  text
  fromdate:
    label:  From Date
    type:   date
    width:  1/2
    format: MM.YYYY
    required: true
  todate:
    label:  To Date
    type:   date
    width:  1/2
    format: MM.YYYY
  description:
    label: Description
    type:  text
    icon:  info-circle
  tags:
    label: Tags
    type:  tags
  client:
    label: The client
    type: text

  coverimage:
    label: Cover image
    type: selector
    mode: single
    options: images
    types:
      - image

  projectContent:
    label: Project Content
    type: headline
  text:
    label: Some words to the project
    type: markdown
  urltoproject:
    label: URL
    type: url
  urltosource:
    label: URL to source
    type: url
