<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ogatajyuku
 */

?>

<!-- =============== footer ============== -->
<a href="#pagetop" class="pagetop jsPageTop">
	<img src="<?php print get_template_directory_uri(); ?>/assets/img/icn_arrorw_up.svg" alt="go to top">
</a>
<footer class="footer">
	<div class="btn-gp">
		<div class="ft-inner w-1077">
			<a href="<?php bloginfo('url'); ?>/entry/" class="ft-btn info-btn"><span>日程案内・体験会お申し込み</span></a>
			<a href="<?php bloginfo('url'); ?>/contact/" class="ft-btn"><span>お問い合わせ</span></a>
		</div>
	</div>
	<div class="ft-blk">
		<div class="ft-inner w-1077">
			<div class="ft-logo">
				<a href="<?php echo site_url(); ?>" class="logo-img">
					<img src="<?php print get_template_directory_uri(); ?>/assets/img/ft_logo.png" alt="小縣塾（おがたじゅく）">
				</a>
				<div class="ico-gp">
					<a href="https://www.facebook.com/profile.php?id=100010382529731" class="ft-icon">
						<img src="<?php print get_template_directory_uri(); ?>/assets/img/ico_fb.png" alt="Facebook">
					</a>
					<a href="https://www.instagram.com/shin_ogata_ogatajyuku/" class="ft-icon insta-icon">
						<img src="<?php print get_template_directory_uri(); ?>/assets/img/ico_instagram.png" alt="Instagram">
					</a>
				</div>
			</div>
			<div class="ft-gnav s-pc">
				<ul class="ft-gnavIn">
					<li><a href="<?php echo site_url(); ?>">トップ</a></li>
					<li><a href="<?php bloginfo('url'); ?>/news/">お知らせ</a></li>
				</ul>
				<ul class="ft-gnavIn">
					<li><a href="<?php bloginfo('url'); ?>/about/">小縣塾（おがたじゅく）とは</a></li>
					<li class="sub-menu"><a href="<?php bloginfo('url'); ?>/about/#visionmap">小縣塾実践会ビジョンマップ</a></li>
					<li class="sub-menu"><a href="<?php bloginfo('url'); ?>/about/#instructor">サポート講師紹介</a></li>
					<li class="sub-menu"><a href="<?php bloginfo('url'); ?>/about/#company">会社概要</a></li>
					<li><a href="<?php bloginfo('url'); ?>/entry/">体験会について</a></li>
				</ul>
				<ul class="ft-gnavIn">
					<li><a href="<?php bloginfo('url'); ?>/profile/">小縣新プロフィール</a></li>
					<li><a href="<?php bloginfo('url'); ?>/voice/">受講者の声</a></li>
					<li><a href="<?php bloginfo('url'); ?>/policy/">プライバシーポリシー</a></li>
					<li><a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a></li>
					<li><a href="<?php bloginfo('url'); ?>/course/">塾生専用ページ</a></li>
				</ul>
			</div>
		</div>
		<div class="ft-copyright ft-inner w-1077">
			<span>&copy; 2021 OgataJyuku</span>
		</div>
	</div>
</footer>
<!-- ./footer -->
<?php wp_footer(); ?>
<!-- js -->
<script src="<?php print get_template_directory_uri(); ?>/assets/js/library/modernizr-custom.js"></script>
<script src="<?php print get_template_directory_uri(); ?>/assets/js/common.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.min.js"></script>
<script>
	lazyload();
</script>

</body>
</html>
