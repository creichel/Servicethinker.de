<?php if(!defined('KIRBY')) exit ?>

title: Accounts
pages:
  limit: 10
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Introduction to this section
    type: markdown
  accounts:
    label: Accounts
    type: structure
    entry: >
      {{name}}: {{url}}
    fields:
      name:
        label: Dienst
        type: select
        options:
          adn: ADN
          behance: Behance
          bitbucket: Bitbucket
          delicious: Delicious
          deviantart: DeviantArt
          digg: digg
          dribbble: Dribbble
          facebook: facebook
          flickr: Flickr
          foursquare: Foursquare
          github: GitHub
          google-plus: Google Plus
          instagram: Instagram
          lastfm: LastFM
          linkedin: LinkedIn
          medium: Medium
          pinterest: Pinterest
          slideshare: Slideshare
          soundcloud: Soundcloud
          spotify: Spotify
          steam: Steam
          tumblr: tumblr
          twitch: twitch
          twitter: Twitter
          vine: vine
          weibo: Weibo
          weixin: Weixin
          xing: Xing
          yelp: yelp
          youtube: YouTube
      url:
        label: Link zum Profil
        type: url
