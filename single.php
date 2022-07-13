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

<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb clearfix">
  <?php the_breadcrumb(); ?>
</div>

<div class="post-single-content">
	<?php
	while( have_posts() ): the_post();
		$event_date = get_field('event_date');
		$video_url = get_field('video_url');
		$download_file = get_field('download_file'); ?>
		<div class="dtl-bg-black">
			<div class="w-880">
				<?php if($event_date) { ?>
					<div class="dtl-event-date">開催日：<?php echo $event_date; ?></div>
				<?php } ?>
					<div class="dtl-post-ttl"><?php the_title(); ?></div>
			</div>
		</div>
		<div class="w-880">
			<?php if($video_url) { ?>
				<div class="dtl-course-video">
					<iframe src="<?php echo $video_url; ?>" title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			<?php } ?>
			<?php if ($download_file) : ?>
				<a href="<?php echo $download_file; ?>" class="cmn-btn01" download="" onclick="javascript: downloadFile('<?php echo $download_file; ?>', '<?php echo $download_file; ?>'); return false;"><span>レジュメダウンロード</span></a>
			<?php endif; ?>
			<div>
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile;
	?>
</div>
<!-- ./ single-page -->

<script>
	function downloadFile(url, filename) {
			"use strict";

			// XMLHttpRequestオブジェクトを作成する
			var xhr = new XMLHttpRequest();
			xhr.open("GET", url, true);
			xhr.responseType = "blob"; // Blobオブジェクトとしてダウンロードする
			xhr.onload = function(oEvent) {
					// ダウンロード完了後の処理を定義する
					var blob = xhr.response;
					if (window.navigator.msSaveBlob) {
							// IEとEdge
							window.navigator.msSaveBlob(blob, filename);
					} else {
							// それ以外のブラウザ
							// Blobオブジェクトを指すURLオブジェクトを作る
							var objectURL = window.URL.createObjectURL(blob);
							// リンク（<a>要素）を生成し、JavaScriptからクリックする
							var link = document.createElement("a");
							document.body.appendChild(link);
							link.href = objectURL;
							link.download = filename;
							link.click();
							document.body.removeChild(link);
					}
			};
			// XMLHttpRequestオブジェクトの通信を開始する
			xhr.send();
	}
</script>
<?php
get_footer();
