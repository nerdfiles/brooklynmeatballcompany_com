<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main" role="main" class="single">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>">

    <?php edit_post_link('Update <i>' . get_the_title() . '</i> page', '<div>', '</div>'); ?>

    <header class="">
      <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>

    <section class="page">
      <div class="content">
        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
    </section>
  
  </article>
  <?php endwhile; endif; ?>

  <!--section class="columns eight">
  <?php //comments_template(); ?>
  </section-->

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
