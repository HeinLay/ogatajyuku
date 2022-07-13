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
  <h3 class="ttl-txt">受講者の声</h3>
</div>

<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb clearfix">
	<?php the_breadcrumb(); ?>
</div>

<div id="single-voice" class="single-content">
	<div class="detail-blk">
		<div class="right-steam-box">
			<div class="steam steam-01"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/profile_right.svg" alt=""></div>
			<div class="steam steam-02"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/profile_right.svg" alt=""></div>
		</div>
		<div class="w-880">
			<div class="detail-ttl"><?php the_title(); ?></div>
			<div class="detail-info">
				<div class="txt">
					<p><?php echo get_field('voice_cus_ttl'); ?></p>
					<p><?php echo get_field('voice_cus_name'); ?></p>
				</div>
				<div class="feature-img">
					<?php if (has_post_thumbnail()) { ?>
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="アイキャッチ画像">
						<?php } else { ?>
							<img src="<?php print get_template_directory_uri(); ?>/assets/img/noimg.jpg" alt="アイキャッチ画像">
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="youtube-blk">
		<div class="blk-inner w-880">
			<?php if (get_field('youtube_url')) { ?>
				<div class="video-blk">
					<div class="detail-video">
						<?php echo get_field('youtube_url'); ?>
					</div>
				</div>
			<?php } ?>
			<div class="detail-txt">
			<?php the_content(); ?> 
			</div>
			<a href="<?php bloginfo('url'); ?>/voice/" class="white-btn-big hover-effect btn-center"><span>受講者の声一覧へ</span></a>
		</div>
	</div>
</div>
<!-- ./ single-page -->


<?php
get_footer();
