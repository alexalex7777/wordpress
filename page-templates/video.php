<?php
/**
 * Template name: Video
 * The template for displaying portfolio.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod('understrap_container_type'); ?>

<section class="background p-0 header-top" style="background-image: url(<?php the_field('video-gallery-image') ?>);
background-repeat: no-repeat; background-size: cover; background-position: center;">
<div class="<?php echo esc_attr($container); ?> text-center pt-5 pb-5">
	<h2 class="page-title">
		<?php the_title() ?>
	</h2>
</div>
</section>

<div class="body-all-page">
	<section class="<?php echo esc_attr($container); ?> pt-5 pb-5">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$args = array(
		'post_type' => 'video-gallery',
		'paged' => $paged
	);
	$the_query = new WP_Query($args);
	global $wp_query;
	$temp_query = $wp_query;
	$wp_query = null;
	$wp_query = $the_query;
	if ($the_query->have_posts()) { ?>
	<ul class="d-flex flex-wrap video-list">
		<?php
		while ($the_query->have_posts()) {
			$the_query->the_post();
			?>
			<?php if (get_field('video-gallery-link')): ?>
				<li class="col-12 col-md-6 col-lg-4 video-element-item video-item">
					<div class="video-hover">
						<?php the_post_thumbnail(); ?>
						<div class="text-center video-button">
							<i class="btn fa fa-3x fa-play video-i" data-target="#modal-v" data-toggle="modal"></i>
						</div>
					</div>
				</li>

				<div class="modal fade" id="modal-v">
					<div class="modal-dialog modal-lg modal-dialog-centered popup">
						<div class="modal-content">
							<a href="#" class="close a-opacity" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true" class="close_popup">&times;</span>
							</a>
							<div class="embed-responsive embed-responsive-16by9">
								<?php the_field('video-gallery-link'); ?>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<?php
		}
		?>
	</ul>
	<?php understrap_pagination(); ?>
	<?php wp_reset_postdata();
}
$wp_query = null;
$wp_query = $temp_query;
?>
</section>
</div>

<?php get_footer(); ?>
