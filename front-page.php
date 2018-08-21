<?php get_header(); ?>

<section class="header-front-page"></section>

<div class="body-all-page">
	<div class="container front-page-content">	
		<!-- slick slider -->
		<?php echo do_shortcode('[slick-slider sliderheight="600" dots="false"]'); ?>
		<a class="galery-page" href="<?php echo esc_url( home_url( '/галерея' ) ); ?>">В галерею</a>
		<!-- content section -->
		<div class="content-front-page" >
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		<!-- block with help info -->
		<div class="title-front-help text-center">
			<h2><?php the_field('title-front-help'); ?></h2>
			<p><?php the_field('text-front-help'); ?></p>
		</div>
		<div class="front-page-bottom row">
			<?php if( get_field('finance-text') ): ?>
				<div class="col-12 col-md-6 col-lg-3">
					<a href="<?php the_field('page_link'); ?>#finance-ph ">
						<img src="<?php the_field('logo-finance'); ?>" alt="icon">
						<h3> <?php the_field('finance-name'); ?> </h3>
						<p> <?php the_field('finance-text'); ?> </p>
					</a>
				</div>
			<?php endif; ?>

			<?php if( get_field('instr_text') ): ?>
				<div class="col-12 col-md-6 col-lg-3">
					<a href="<?php the_field('page_link'); ?>#instruments-ph ">
						<img src="<?php the_field('logo-instr'); ?>" alt="icon">
						<h3> <?php the_field('instr_name'); ?> </h3>
						<p> <?php the_field('instr_text'); ?> </p>
					</a>
				</div>
			<?php endif; ?>


			<?php if( get_field('mater_text') ): ?>
				<div class="col-12 col-md-6 col-lg-3">
					<a href="<?php the_field('page_link'); ?>#materials-ph ">
						<img src="<?php the_field('logo-mater'); ?>" alt="icon">
						<h3> <?php the_field('mater_name'); ?> </h3>
						<p> <?php the_field('mater_text'); ?> </p>
					</a>
				</div>
			<?php endif; ?>


			<?php if( get_field('mentors_text') ): ?>
				<div class="col-12 col-md-6 col-lg-3">
					<a href="<?php the_field('page_link'); ?>#mentors-ph ">
						<img src="<?php the_field('logo-mentors'); ?>" alt="icon">
						<h3> <?php the_field('mentors_name'); ?> </h3>
						<p> <?php the_field('mentors_text'); ?> </p>
					</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>