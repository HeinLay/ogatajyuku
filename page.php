<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ogatajyuku
 */

get_header();
?>

<div class="page-ttl">
  <h3 class="ttl-txt"><?php the_title(); ?></h3>
</div>

<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb clearfix">
  <?php the_breadcrumb(); ?>
</div>

<!-- =============== content ============== -->
<div class="pg-content w-1077">
  <div id="page">
    <?php while( have_posts() ): the_post() ;?>
      <?php the_content(); ?>
    <?php endwhile;?>
  </div>
</div>
<!-- ./ pg-content -->

<?php
get_footer();
