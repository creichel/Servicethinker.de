<?php echo css('assets/stylesheets/bootstrap.css') ?>

<?php echo js('vendors/jquery/jquery-1.min.js') ?>
<?php echo js('assets/scripts/main.jquery.min.js') ?>

<!--[if lt IE 9]>
<?php echo js('vendors/html5shiv/html5shiv.min.js') ?>
<script src="IE8.js">IE7_PNG_SUFFIX=".png";</script>
<?php echo js('vendors/IE9/IE9.min.js') ?>
<?php echo js('vendors/respond.js/respond.min.js.js') ?>
<![endif]-->

<?php snippet('analytics') ?>