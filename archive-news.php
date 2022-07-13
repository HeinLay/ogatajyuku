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

<div class="page-ttl">
  <h3 class="ttl-txt">お知らせ一覧</h3>
</div>

<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb clearfix">
  <div class="crumbs">
    <a href="<?php echo site_url(); ?>">トップ</a> &nbsp;&gt;&nbsp; 
    <span class="current">お知らせ一覧</span>
  </div>
</div>
<div class="archive-content w-1077">
  <?php query_posts('posts_per_page=-1&post_type=news&order=DESC&paged='.$paged); ?>
  <?php if (have_posts()) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="news-item">
        <div><?php echo get_the_date( 'Y.m.d' ); ?></div>
        <div>
          <a href="<?php the_permalink(); ?>"><span class="info-ttl"><?php the_title(); ?></span></a>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_query(); ?>
</div>
<?php
get_footer();
