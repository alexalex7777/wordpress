<?php
/**
 * Template Name: page-help
 * Template for displaying a blank page.
 *
 */
get_header(); $container   = get_theme_mod( 'understrap_container_type' );?>

<!--section header fo the page-->
<section class="background p-0 header-top" style="background-image: url(<?php the_field('header-help-page') ?>);
background-repeat: no-repeat; background-size: cover; background-position: left center;">
<div class="<?php echo esc_attr($container); ?> text-center pt-5 pb-5">
	<h2 class="page-title">
		<?php the_title() ?>
	</h2>
</div>
</section>

<!--section with info about help -->
<div class="body-all-page">
	<div class="container page-help">
		<ul>
			<?php if( get_field('finance_title') ): ?>
				<li class="finance row">
					<a name="finance-ph"></a>
					<div class="col-12 col-md-3">
						<img src="<?php the_field('logo-finance'); ?>" alt="icon">
					</div>
					<div class="col-12 col-md-9">
						<h2> <?php the_field('finance_title'); ?> </h2>
						<p><?php the_field('finance'); ?> </p>
					</div>
				</li>
			<?php endif; ?>

			<?php if( get_field('instruments-title') ): ?>
				<li class="instruments row">
					<a name="instruments-ph"></a>
					<div class="col-12 col-md-3">
						<img src="<?php the_field('logo-instr'); ?>" alt="icon">
					</div>
					<div class="col-12 col-md-9">
						<h2> <?php the_field('instruments-title'); ?> </h2>
						<p> <?php the_field('instruments'); ?> </p>
					</div>
				</li>
			<?php endif; ?>

			<?php if( get_field('materials-title') ): ?>
				<li class="materials row">
					<a name="materials-ph"></a>
					<div class="col-12 col-md-3">
						<img src="<?php the_field('logo-materials'); ?>" alt="icon">
					</div>
					<div class="col-12 col-md-9">
						<h2><?php the_field('materials-title'); ?></h2>
						<p> <?php the_field('materials'); ?> </p>
					</div>
				</li>
			<?php endif; ?>

			<?php if( get_field('mentors-title') ): ?>
				<li class="mentors row">
					<a name="mentors-ph"></a>
					<div class="col-12 col-md-3">
						<img src="<?php the_field('logo-mentors'); ?>" alt="icon">
					</div>
					<div class="col-12 col-md-9">
						<h2> <?php the_field('mentors-title'); ?> </h2>
						<p><?php the_field('mentors'); ?> </p>
					</div>
				</li>
			<?php endif; ?>
		</ul>


		<!--section with message form name and description -->
		<div class="message-form text-center">
			<div>
				<?php if( get_field('form_title') ): ?>
					<h5 class="contact-title">
						<?php the_field('form_title'); ?>
					</h5>
				<?php endif; ?>
				<?php if( get_field('form-description') ): ?>
					<p> <?php the_field('form-description'); ?></p>
				<?php endif; ?>

				<!--section with message form -->
				<?php echo do_shortcode( '[contact-form-7 id="143" title="Contact form 1"]' ); ?>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>