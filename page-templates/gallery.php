<?php
/**
 * Template name: Gallery
 * The template for displaying section about company.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod('understrap_container_type'); ?>

	<section class="background p-0 header-top"
			 style="background-image: url(<?php the_field('back-mage-for-galerry') ?>);
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
			'post_type' => 'gallery',
			'paged' => $paged
		);
		$the_query = new WP_Query($args);
		global $wp_query;
		$temp_query = $wp_query;
		$wp_query = null;
		$wp_query = $the_query;
		if ($the_query->have_posts()) { ?>
			<ul class="d-flex flex-wrap news-list">
				<?php
				while ($the_query->have_posts()) {
					$the_query->the_post();
					?>
					<li class="col-12 col-md-6 col-lg-4 pb-4 blog-element-item gallery-item">
						<div class="gallery-image">
							<?php the_post_thumbnail(); ?>
							<div class="gallery-hover">
								<h2 class="padding">
									<a href="<?php the_permalink(); ?>" class="gallery-item-name">
										<i class="fa fa-hand-o-down before-title d-block"></i>
										<?php the_title(); ?>
									</a>
								</h2>
								<?php
								$archive_year = get_the_time('Y');
								$archive_month = get_the_time('F');
								$archive_day = get_the_time('j');
								?>
								<time datetime="<?= get_the_date('Y-m-d'); ?>">
									<?= get_the_date('j F Y'); ?>
								</time>
							</div>
						</div>
					</li>
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