<?php
require_once '/Users/nerdfiles/Sites/brooklynmeatballcompany_com/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><!DOCTYPE html>
<html>
<head>
  <?php echo render_partial("layouts/head"); ?>

</head><body class="base-template">
<div class="page-wrapper">
<header class="site-header">
  <?php echo render_partial("layouts/header"); ?>

</header><nav class="site-nav">
  <?php echo render_partial("layouts/nav"); ?>

</nav><section class="site-content">
  <?php echo yield(); ?>

</section><footer class="site-footer">
  <?php echo render_partial("layouts/footer"); ?>

</footer><!--= javascript_include_tag("http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js")  --><!--= javascript_include_tag("application")  --></div></body></html>