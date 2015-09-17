<?php if(!defined('KIRBY')) exit ?>

title: Seiteneigenschaften
pages:
  template:
    - default
    - home
    - articles
    - talks
    - projects
    - publications
files: true
fields:
  lessthanienine:
    label: >
      Warnung für Nutzer, die Internet Explorer < 9 einsetzen
    type: textarea
    help: Dieser Text wird allen Nutzern angezeigt, die den Internet Explorer bis Version 9 einsetzen.
  info-a:
    label: Grundinformationen
    type: headline
  title:
    label: Titel der Webseite
    type:  text
    required: true
  author:
    label: Verwaltende Person
    type: text
    width: 1/2
    required: true
  designer:
    label: Design von
    type: text
    placeholder: Christian Reichel
    width: 1/2
    icon: paint-brush
  description:
    label: Kurzbeschreibung der Webseite
    type: textarea
    required: true
  keywords:
    label: Schlüsselbegriffe
    type: tags
    help: Über diese Begriffe wird die Seite bei Google auffindbar gemacht.
    required: true
  copyright:
    label: Copyright-Hinweis
    type: text
    icon: copyright
    required: true
  info-b:
    label: Kontaktinformationen
    type: headline
  email:
    label: Admin E-Mail
    type: email
    required: true
  info-c:
    label: Adresse
    type: headline
  street:
    label: Straße Hausnummer
    type: text
    required: true
  zipcode:
    label: Postleitzahl
    type: text
    width: 1/2
    required: true
  city:
    label: Stadt
    type: text
    width: 1/2
    required: true
  state:
    label: Bundesland
    type: text
    width: 1/2
    required: true
  land:
    label: Land
    type: text
    default: Germany
    placeholder: Germany
    width: 1/2
    required: true