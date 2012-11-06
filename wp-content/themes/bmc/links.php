<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

/*
Template Name: Links
*/
?>

<?php get_header(); ?>

<div id="main" class="single">

  <div class="page">
    <div class="content">

      <h2>Links:</h2>
      <ul>
        <?php wp_list_bookmarks(); ?>
      </ul>

    </div>
  </div>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
