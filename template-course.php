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
/*
Template Name: 塾生専用ページ

*/
?>

<div class="page-ttl">
  <h3 class="ttl-txt"><?php the_title(); ?></h3>
</div>

<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb clearfix">
  <?php the_breadcrumb(); ?>
</div>
<?php $category = get_the_category($post->ID);
$cat_id = $category[0]->cat_ID;
$cat_name = $category[0]->name;
$cat_slug = $category[0]->slug;
$category_link = get_category_link($cat_id);
?>
<?php /* Archive -------------------------------------*/ ?>
<div class="course w-880">
	<p class="course-txt">受講中のクラスをクリックしてお進みください。</p>
	<ul class="cat-btn-gp">
		<?php
		// カテゴリ情報を取得
		$cat_all = get_terms(
			"category",
			array(
				'exclude' => array('1'),
			)
		);
		foreach ($cat_all as $cat) :
			$cat_id  = $cat->term_id;
			// 親カテゴリのみ取得
			if ($cat->parent == 0) :
		?>
			<li class="cat-btn">
				<a href="<?php echo get_category_link($cat_id); ?>"><?php echo $cat->name; ?></a>
			</li>
		<?php endif;
		endforeach; ?>
	</ul>
	<div>
		<?php
		while( have_posts() ): the_post();
			the_content('');
		endwhile;
		?>
	</div>
</div>
<?php
get_footer();
