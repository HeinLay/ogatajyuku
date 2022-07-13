<?php
/**
 * The template for displaying Category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ogatajyuku
 */

get_header();
?>

<div class="page-ttl">
<?php if(pippin_in_term_with_password(get_the_ID())) : ?>
	<h3 class="ttl-txt">塾生専用ページ</h3>
	<?php else : ?>
	<h3 class="ttl-txt"><?php the_archive_title(); ?>過去動画</h3>
	<?php endif; ?>
</div>

<div class="breadcrumb clearfix">
	<?php the_breadcrumb(); ?>
</div>
<!-- =============== content ============== -->
<div class="entry-content">
	<?php if(pippin_in_term_with_password(get_the_ID())) : ?>
	<?php echo pippin_term_password_form(); ?>
	<?php else : ?>
	<div class="post-blk">
		<div class="w-640">
			<?php
					if (have_posts()) : ?>
			<?php  $category = get_the_category($post->ID);
						$cat_id = $category[0]->cat_ID;
						$cat_name = $category[0]->name;
						$cat_slug = $category[0]->slug; ?>
			<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						query_posts('category_name='.$cat_slug.'&posts_per_page=10&order=DESC&paged='.$paged);
						?>
			<?php while (have_posts()) : the_post(); ?>
			<?php
						$event_date = get_field('event_date');
						$video_url = get_field('video_url');
					?>
			<div class="post-item">
				<?php if($event_date) { ?>
				<div class="event-date">開催日：<?php echo $event_date; ?></div>
				<?php } ?>
				<?php if($video_url) { ?>
				<div class="course-video">
					<iframe src="<?php echo $video_url; ?>" title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
				<?php } ?>
				<div class="post-ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				<div class="post-content">
					<a href="<?php the_permalink(); ?>">
						<div class="post-txt"><?php the_content(); ?></div>
						<?php
									if( !empty( get_the_content() )) { ?>
						<span>>&nbsp;もっと見る</span>
						<?php } ?>
					</a>
				</div>
			</div>
			<?php endwhile; ?>
			<?php /* pagination */ ?>
			<div class="pagination-box">
				<?php the_posts_pagination(array(
              'prev_text' => '<i class="fas fa-arrow-left"></i>',
              'next_text' => '<i class="fas fa-arrow-right"></i>',
            )); ?>
				<?php wp_reset_query(); ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
		<!-- ./content -->
		<?php endif; ?>
	</div><!-- .entry-content -->

	<?php
get_footer();
