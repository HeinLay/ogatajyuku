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
  <h3 class="ttl-txt">受講者の声</h3>
</div>

<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb clearfix">
  <?php the_breadcrumb(); ?>
</div>

<div class="voice-pg">
  <div class="voice-txt-gp">
    <ul class="txt-gp">
      <li>
        <img src="<?php print get_template_directory_uri(); ?>/assets/img/img_txt01.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_txt01.png" alt="従業員に思いが伝わる様になった" />   
      </li>
      <li>
        <img src="<?php print get_template_directory_uri(); ?>/assets/img/img_txt02.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_txt02.png" alt="自分の殻を破りステージが変わった" />
      </li>
      <li>
        <img src="<?php print get_template_directory_uri(); ?>/assets/img/img_txt03.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_txt03.png" alt="本当にやりたい事が明確になった" />
      </li>
      <li>
        <img src="<?php print get_template_directory_uri(); ?>/assets/img/img_txt04.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_txt04.png" alt="商品が売れるようになった" /> 
      </li>

      <p class="voice-intro">
        小縣塾（おがたじゅく）では、それぞれの分野で活躍するリーダー・また挑戦する方々が受講され、共に学びを深めております。これまでにお寄せいただいた、受講者の声を紹介します。
      </p>
    </ul>
  </div>

  <div class="left-steam-box">
    <div class="steam steam-01"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_right.svg" alt=""></div>
    <div class="steam steam-04"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_right.svg" alt=""></div>
    <div class="steam steam-05"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_right.svg" alt=""></div>
  </div>

  <div class="voice-list">
    
    <?php query_posts('posts_per_page=8&post_type=voice&order=DESC&paged='.$paged); ?>
      <?php if (have_posts()) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <a class="voice-item" href="<?php the_permalink(); ?>">
            <div class="ttl s-sp">
              <?php the_title(); ?>
            </div>
						<div class="cus-info s-sp">
							<?php echo get_field('voice_cus_ttl'); ?> <br> <?php echo get_field('voice_cus_name'); ?>
						</div>
            <?php if (has_post_thumbnail()) { ?>
              <div class="voice-img" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>)no-repeat; background-size: cover; background-position: top center;"></div>
            <?php } else { ?>
              <div class="voice-img" style="background: url(<?php print get_template_directory_uri(); ?>/assets/img/noimg.jpg)no-repeat; background-size: cover; background-position: top center; "></div>
            <?php } ?>
            <div class="voice-txt">
              <div class="ttl s-pc">
                <?php the_title(); ?>
              </div>
              <div class="cus-info s-pc">
                <?php echo get_field('voice_cus_ttl'); ?> <br> <?php echo get_field('voice_cus_name'); ?>
              </div>
              <div class="voice-content">
                <div class="content-blk">
                <?php the_content(); ?>
                </div>
                <?php
          if( !empty( get_the_content() )) { ?>
            <span>>&nbsp;もっと見る</span>
          <?php } ?>
              </div>
            </div>
          </a>
        <?php endwhile; ?>
        <?php /* pagination */ ?>
          <div class="voice-pagination">
            <?php the_posts_pagination(array(
              'prev_text' => '<span class="pg-left"></span>',
              'next_text' => '<span class="pg-right"></span>',
            )); ?>
          </div>
      <?php endif; ?>
    <?php wp_reset_query(); ?>
  </div>
</div>
<?php
get_footer();
