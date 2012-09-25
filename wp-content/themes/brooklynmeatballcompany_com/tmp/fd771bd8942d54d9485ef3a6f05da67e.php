<?php
require_once '/Users/nerdfiles/Sites/diangelopublications_com/wp-system/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><h2>
  <?php echo link_to(get_the_title(), get_permalink()); ?>

</h2>  <?php the_post(); ?>
  <?php echo render_partial("pages/page"); ?>

