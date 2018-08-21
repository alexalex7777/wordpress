<?php
/**
 * Template name: About
 * The template for displaying section about company.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod('understrap_container_type'); ?>

<!--section About us-->
<section class="background p-0 header-top" style="background-image: url(<?php the_field('back-image-for-about') ?>);
background-repeat: no-repeat; background-size: cover; background-position: left center;">
<div class="<?php echo esc_attr($container); ?> text-center pt-5 pb-5">
	<h2 class="page-title">
		<?php the_title() ?>
	</h2>
</div>
</section>

<!--section with content-->
<div class="body-all-page">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="<?php echo esc_attr($container); ?> pt-5 pb-5">
			<div class="content-about">
				<?php the_content(); ?>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>