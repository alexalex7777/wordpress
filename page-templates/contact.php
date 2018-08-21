<?php
/**
 * Template Name: contact
 * Template for displaying a blank page.
 *
 */

get_header();
$container = get_theme_mod('understrap_container_type'); ?>

<!--section header fo the page-->
<section class="background p-0 header-top" style="background-image: url(<?php the_field('contact-header') ?>);
background-repeat: no-repeat; background-size: cover; background-position: left center;">
<div class="<?php echo esc_attr($container); ?> text-center pt-5 pb-5">
	<h2 class="page-title">
		<?php the_title() ?>
	</h2>
</div>
</section>

<div class="body-all-page">
	<section>
		<!--section with google map-->
		<div class="contact-map">
			<?php the_field('map'); ?>
			<div class="map-pop">
				<img src="<?php the_field('map-pop-img'); ?>" alt="home img">
				<p><?php the_field('map-pop-text'); ?></p>
			</div>
		</div>

		<!--section with contact form name -->
		<div class="<?php echo esc_attr($container); ?> pb-5 text-center">
			<?php if (get_theme_mod('form_name')): ?>
				<h5 class="form-title">
					<?php echo get_theme_mod('form_name'); ?>
				</h5>
			<?php endif; ?>

			<!--section with contact form -->
			<?php echo do_shortcode('[contact-form-7 id="143" title="Contact form 1"]'); ?>
		</div>
	</section>
</div>

<?php get_footer(); ?>
