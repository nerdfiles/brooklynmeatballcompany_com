<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
/*
Template Name: Home
*/

get_header(); ?>

<div id="main" role="main" class="home">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>">

    <?php edit_post_link('Update the home page.', '<p>', '</p>'); ?>

    <header class="">
      <h2><?php the_title(); ?></h2>
    </header>

    <div class="page">
      <div class="content">

      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

      </div>
    </div>

  </article>

  <?php endwhile; endif; ?>

  <?php //comments_template(); ?>

</div>

<?php get_footer(); ?>

