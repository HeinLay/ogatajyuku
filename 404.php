<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ogatajyuku
 */

get_header();
?>

<div class="page-ttl">
  <h3 class="ttl-txt">404エラー</h3>
</div>

<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb w-980 clearfix">
  <?php the_breadcrumb(); ?>
</div>

<div class="content-area w-880">
  <div class="not-found s-mt-40 s-mb-40">
    <h2 class="s-txt-center color04">お探しのページは見つかりません。</h2>
    <p class="s-lh-20 s-mt-30 s-mb-30 s-txt-center color04">
      エラーコード：404 Not Found
    </p>
    <a href="<?php echo site_url(); ?>" class="red-btn hover-effect btn-center">トップページへ戻る</a>
  </div>
  <!-- ./ not-found -->
</div>
<!-- ./ content-area -->

<?php
get_footer();
