<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ogatajyuku
 */

get_header();

?>

<div class="page-ttl">
  <h3 class="ttl-txt">お知らせ</h3>
</div>

<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb clearfix">
  <?php the_breadcrumb(); ?>
</div>

<div class="single-content w-1077">
	<div class="news-item">
		<div><?php the_time( 'Y.m.d' ); ?></div>
		<div>
			<span class="info-ttl"><?php the_title(); ?></span>
			<div class="info-txt"><?php the_content(); ?></div>
		</div>
	</div>
</div>
<!-- ./ single-page -->


<?php
get_footer();
