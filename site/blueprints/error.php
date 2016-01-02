<?php if (!defined('KIRBY')) {
    exit;
} ?>

title: Error
pages: false
files: false
fields:
  title:
    label: Titel
    type:  text
  alttitle:
    label: Alternativtitel
    type: text
    help: Dieser Titel wird nur auf der jeweiligen Seite genutzt
  text:
    label: Text
    type:  textarea
    size:  large
  coverimage:
    label: Coverbild-Auswahl
    type: selector
    mode: single
    options: images
    types:
      - image
    help: Dieses Coverbild wird beim Teilen der Seite auf Facebook angezeigt.
  headline-7:
    label: Suchmaschinenoptimierung
    type: headline
  seositemap:
    label: Soll diese Seite in der Sitemap angezeigt werden?
    type: toggle
    text: yes/no
    default: true
    help: Diese Option beeinflusst ebenfalls die Indexierung (Anzeige) der Seite bei Suchmaschinen (wie Google).
    width: 1/2
  seopriority:
    label: Manuelle Priorität der Seite
    type: number
    help: Zahl zwischen 0.1 und 0.9. Das beeinflusst die Positionierung der Seite bei Suchmaschinen (wie Google).
    validate: num
    min: 0.1
    max: 0.9
    width: 1/2
  seotags:
    label: Zusätzliche Schlüsselwörter
    type: tags
    help: Für spezielle, inhaltsspezifische Schlüsselwörter.
  seodescription:
    label: Spezielle Beschreibung für Suchmaschinen
    type: textarea