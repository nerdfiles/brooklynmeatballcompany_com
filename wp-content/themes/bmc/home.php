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

    <iframe width="940" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=930+Main+Street,+Houston,+TX&amp;aq=0&amp;oq=930+Main&amp;sll=29.854162,-95.373328&amp;sspn=1.617376,2.469177&amp;ie=UTF8&amp;hq=&amp;hnear=930+Main+St,+Houston,+Harris,+Texas+77002&amp;t=p&amp;ll=29.763297,-95.375576&amp;spn=0.018627,0.04034&amp;z=15&amp;output=embed&amp;iwloc=&amp;"></iframe>

    <?php edit_post_link('Update <i>the home page</i>', '<div>', '</div>'); ?>

    <header class="">
      <h2><a href="<?php echo get_bloginfo('url'); ?>"><?php the_title(); ?></a></h2>
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

