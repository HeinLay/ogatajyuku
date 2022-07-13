<?php
/**
 * The template for displaying Archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ogatajyuku
 */

get_header();
?>
<div class="content w-980">
  <?php if (have_posts()) : ?>
    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_query(); ?>
</div>
<?php
get_footer();
