<?php
  echo css('assets/stylesheets/basic.css');
  echo js('assets/scripts/main.js');

  if (isset($d3) && $d3 == true) echo js('https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js');

  if (isset($hljs) && $hljs == true) {
    echo js('vendors/highlight/highlight.pack.js');
    echo '<script>hljs.initHighlightingOnLoad();</script>';
  }

?>
