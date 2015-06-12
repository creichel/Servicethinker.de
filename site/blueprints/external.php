<?php if(!defined('KIRBY')) exit ?>

title: External Page
pages: true
files: true
fields:
  title:
    label: Titel
    type:  text
  link:
    label: Link to external page
    type: url
    required: yes
  newwindow:
    label: Soll die Seite in einem neuen Fenster geöffnet werden?
    type: toggle
    default: true