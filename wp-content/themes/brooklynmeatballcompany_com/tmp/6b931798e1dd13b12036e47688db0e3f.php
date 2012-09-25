<?php
require_once '/Users/nerdfiles/Sites/diangelopublications_com/wp-system/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><!--Charset  --><meta charset="utf-8" /><!--Title  --><title>
  <?php echo get_page_title(bloginfo('name'), " – "); ?>

</title><!--Stylesheets  -->  <?php echo stylesheet_link_tag("screen"); ?>

  <?php echo javascript_include_tag("https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js"); ?>

<!--HTML5 Shiv  -->

<!--[if lt IE 9]>
  <?php echo javascript_include_tag("http://html5shiv.googlecode.com/svn/trunk/html5.js"); ?>


<![endif]-->
  <?php wp_head(); ?>
