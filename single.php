<?php get_header();
$container = get_theme_mod('understrap_container_type'); ?>

<section class="background p-0 header-top" style="background-image: url(<?php the_field('single-back-image') ?>);
background-repeat: no-repeat; background-size: cover; background-position: center;">
<div class="<?php echo esc_attr($container); ?> text-center pt-5 pb-5">
	<h2 class="page-single-title">
		<?php the_title() ?>
	</h2>
</div>
</section>
<div class="body-all-page">
	<section class="<?php echo esc_attr($container); ?> pt-5">
		<main>
			<?php if (get_field('image1')): ?>
				<ul class="grid d-flex flex-wrap">
					<li class="element-item gallery-single-item col-12 col-sm-6 col-md-4 pb-4">
						<div class="single-img">
							<img src="<?php the_field('image1') ?>" alt="description">
							<div class="single-hover">
								<i class="fa fa-search-plus hover-i" data-target="#modal-1" data-toggle="modal"></i>
							</div>
						</div>
					</li>
				<?php endif; ?>

				<?php if (get_field('image2')): ?>
					<li class="element-item gallery-single-item col-12 col-sm-6 col-md-4 pb-4">
						<div class="single-img">
							<img src="<?php the_field('image2') ?>" alt="description">
							<div class="single-hover">
								<i class="fa fa-search-plus hover-i" data-target="#modal-2" data-toggle="modal"></i>
							</div>
						</div>
					</li>
				<?php endif; ?>

				<?php if (get_field('image3')): ?>
					<li class="element-item gallery-single-item col-12 col-sm-6 col-md-4 pb-4">
						<div class="single-img">
							<img src="<?php the_field('image3') ?>" alt="description">
							<div class="single-hover">
								<i class="fa fa-search-plus hover-i" data-target="#modal-3" data-toggle="modal"></i>
							</div>
						</div>
					</li>
				<?php endif; ?>

				<?php if (get_field('image4')): ?>
					<li class="element-item gallery-single-item col-12 col-sm-6 col-md-4 pb-4">
						<div class="single-img">
							<img src="<?php the_field('image4') ?>" alt="description">
							<div class="single-hover">
								<i class="fa fa-search-plus hover-i" data-target="#modal-4" data-toggle="modal"></i>
							</div>
						</div>
					</li>
				<?php endif; ?>

				<?php if (get_field('image5')): ?>
					<li class="element-item gallery-single-item col-12 col-sm-6 col-md-4 pb-4">
						<div class="single-img">
							<img src="<?php the_field('image5') ?>" alt="description">
							<div class="single-hover">
								<i class="fa fa-search-plus hover-i" data-target="#modal-5" data-toggle="modal"></i>
							</div>
						</div>
					</li>
				<?php endif; ?>
				<?php if (get_field('image6')): ?>
					<li class="element-item gallery-single-item col-12 col-sm-6 col-md-4 pb-4">
						<div class="single-img">
							<img src="<?php the_field('image6') ?>" alt="description">
							<div class="single-hover">
								<i class="fa fa-search-plus hover-i" data-target="#modal-6" data-toggle="modal"></i>
							</div>
						</div>
					</li>
				<?php endif; ?>
			</ul>

			<!--PopUp Window by Bootstrap-->
			<div class="modal fade" id="modal-1">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<a href="#" class="close a-opacity" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="close_popup">&times;</span>
						</a>
						<img src="<?php the_field('image1') ?>" class="project imgpop" alt="description">
					</div>
				</div>
			</div>
			<div class="modal fade" id="modal-2">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<a href="#" class="close a-opacity" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="close_popup">&times;</span>
						</a>
						<img src="<?php the_field('image2') ?>" class="project imgpop" alt="description">
					</div>
				</div>
			</div>
			<div class="modal fade" id="modal-3">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<a href="#" class="close a-opacity" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="close_popup">&times;</span>
						</a>
						<img src="<?php the_field('image3') ?>" class="project imgpop" alt="description">
					</div>
				</div>
			</div>
			<div class="modal fade" id="modal-4">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<a href="#" class="close a-opacity" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="close_popup">&times;</span>
						</a>
						<img src="<?php the_field('image4') ?>" class="project imgpop" alt="description">
					</div>
				</div>
			</div>
			<div class="modal fade" id="modal-5">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<a href="#" class="close a-opacity" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="close_popup">&times;</span>
						</a>
						<img src="<?php the_field('image5') ?>" class="project imgpop" alt="description">
					</div>
				</div>
			</div>
			<div class="modal fade" id="modal-6">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<a href="#" class="close a-opacity" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="close_popup">&times;</span>
						</a>
						<img src="<?php the_field('image6') ?>" class="project imgpop" alt="description">
					</div>
				</div>
			</div>

			<!--content section -->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="pt-5 pb-5">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</main>

	<!-- video section -->
	<?php if (get_field('video-link')): ?>
		<div class="video embed-responsive embed-responsive-16by9">
			<?php the_field('video-link') ?>
		</div>
	<?php endif; ?>

	<!--Comments List -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="text-center pt-5 pb-5">
			<?php
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;
			?>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
</section>
</div>

<?php get_footer(); ?>
