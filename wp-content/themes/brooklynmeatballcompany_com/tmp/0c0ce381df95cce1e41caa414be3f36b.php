<?php
require_once '/Users/nerdfiles/Sites/diangelopublications_com/wp-system/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><h1>
  <?php echo link_to(get_bloginfo('name'), get_bloginfo('url')); ?>

</h1>  <?php if (get_bloginfo('description')) { ?>

<p>
  <?php echo get_bloginfo('description'); ?>

</p><?php } ?>
