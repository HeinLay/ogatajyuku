<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ogatajyuku
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-KBGLFGR7NF"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-KBGLFGR7NF');
	gtag('config', 'UA-210511722-1');
	</script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="canonical" href="" />
	<meta property="og:type" content="website" />
	<meta name="twitter:card" content="summary_large_image">
	<!-- favicon, touch-icon -->
	<link rel="shortcut icon" href="<?php print get_template_directory_uri(); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php print get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php print get_template_directory_uri(); ?>/assets/img/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php print get_template_directory_uri(); ?>/assets/img/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php print get_template_directory_uri(); ?>/assets/img/apple-touch-icon-152x152.png">
	<!-- css -->
	<link rel="stylesheet" href="<?php print get_template_directory_uri(); ?>/assets/css/btheme.css">
	<!-- js -->
	<script src="<?php print get_template_directory_uri(); ?>/assets/js/library/jquery.js"></script> 
	<script src="<?php print get_template_directory_uri(); ?>/assets/js/error_msg.js"></script>
	<!-- Web Font -->
	<script>
		(function(d) {
			var config = {
					kitId: 'mjz8tad',
					scriptTimeout: 3000,
					async: true
				},
				h = d.documentElement,
				t = setTimeout(function() {
					h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
				}, config.scriptTimeout),
				tk = d.createElement("script"),
				f = false,
				s = d.getElementsByTagName("script")[0],
				a;
			h.className += " wf-loading";
			tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
			tk.async = true;
			tk.onload = tk.onreadystatechange = function() {
				a = this.readyState;
				if (f || a && a != "complete" && a != "loaded") return;
				f = true;
				clearTimeout(t);
				try {
					Typekit.load(config)
				} catch (e) {}
			};
			s.parentNode.insertBefore(tk, s)
		})(document);
	</script>


	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- for IE9 below -->
	<!--[if lt IE 9]>
  <script src="<?php print get_template_directory_uri(); ?>/common/js/library/respond.min.js"></script>
<![endif]-->
	<?php wp_head(); ?>
</head>

<body id="pagetop">
	<!-- ===============  header ============== -->
	<?php if (is_home()) { ?>
		<div class="top-header s-pc">
			<div class="top-header-inner">
				<ul class="nav">
					<li>
						<a href="<?php bloginfo('url'); ?>/about/">小縣塾とは</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/profile/">小縣新プロフィール</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/voice/">受講者の声</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a>
					</li>
				</ul>
				<a href="<?php bloginfo('url'); ?>/entry/" class="apply-btn hover-effect">
					<span>説明会</span><span>の</span>お申し込み<span>は</span><br>こちらから
				</a>
			</div>
		</div>
	<?php } ?>
	<header class="header <?php if (!is_home()) { ?> page <?php }  ?>">
		<div class="headerIn">
			<h1 class="h-logo s-pc">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php print get_template_directory_uri(); ?>/assets/img/logo.png" alt="小縣塾 SAMURAISM" class="logo-black">
					<img src="<?php print get_template_directory_uri(); ?>/assets/img/ft_logo.png" alt="小縣塾 SAMURAISM" class="logo-white">
				</a>
			</h1>
			<div class="h-right s-pc">
				<ul class="h-gnav">
					<li>
						<a href="<?php bloginfo('url'); ?>/about/">小縣塾とは</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/profile/">小縣新プロフィール</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/voice/">受講者の声</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a>
					</li>
				</ul>
				<a href="<?php bloginfo('url'); ?>/entry/" class="apply-btn hover-effect"><span>説明会</span><span>の</span>お申し込み<span>は</span><br>こちらから</a>
			</div>
			<!-- ./ h-right -->
		</div>
		<!-- ./ headerIn -->
	</header>
	<!-- ./header -->

	<div class="gnav s-sp">
		<div class="jsHeadNav">
			<?php if (is_home()) { ?>
				<a href="<?php bloginfo('url'); ?>/entry/" class="apply-btn hover-effect apply-btn-top"><span>説明会</span><span>の</span>お申し込み<span>は</span><br>こちらから</a>
				<div class="menu-trigger jsSlideMenu menu-trigger-top">
					<span></span>
					<span></span>
					<span></span>
				</div>
			<?php } ?>
			<?php if (!is_home()) { ?>
				<div class="sp-single">
					<div class="row">
						<h1 class="logo single-logo">
							<a href="<?php echo site_url(); ?>">
								<img src="<?php print get_template_directory_uri(); ?>/assets/img/ft_logo.png" alt="小縣塾 SAMURAISM">
							</a>
						</h1>
						<a href="<?php bloginfo('url'); ?>/entry/" class="apply-btn hover-effect apply-btn-single"><span>説明会</span><span>の</span>お申し込み<span>は</span><br>こちらから</a>
					</div>
				</div>
			<?php } ?>
			<div class="header-slide jsSlideMenuOpen">
				<div class="header-slide-inner">
					<div class="header-slide-in">
						<h1 class="logo">
							<a href="<?php echo site_url(); ?>">
								<img src="<?php print get_template_directory_uri(); ?>/assets/img/ft_logo.png" alt="小縣塾 SAMURAISM">
							</a>
						</h1>
						<div class="menu-trigger jsSlideMenu <?php if (!is_home()) { ?> menu-trigger-single <?php }  ?>">
							<span></span><span></span><span></span>
						</div>
					</div>
					<ul class="gnavIn s-mb-40">
						<li><a href="<?php bloginfo('url'); ?>/about/">小縣塾とは</a></li>
						<li><a href="<?php bloginfo('url'); ?>/profile/">小縣新プロフィール</a></li>
						<li><a href="<?php bloginfo('url'); ?>/voice/">受講者の声</a></li>
						<li><a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a></li>
						<li><a href="<?php bloginfo('url'); ?>/course/">塾生専用ページ</a></li>
						<li><a href="<?php echo site_url(); ?>/news">お知らせ</a></li>
						<li><a href="<?php bloginfo('url'); ?>/policy/">プライバシーポリシー</a></li>
					</ul>
					<a href="<?php bloginfo('url'); ?>/entry/" class="apply-btn hover-effect"><span>説明会</span><span>の</span>お申し込み<span>は</span><br>こちらから</a>
				</div>
			</div>
		</div>
	</div>
	<!-- ./ gnav -->
