<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod('understrap_container_type'); ?>


<footer class="footer">
	<div class="<?php echo esc_attr($container); ?>">

		<ul class="row flex-wrap justify-content-between">
			<li class="col-12 col-md-6 col-lg-5 pb-3">
				<ul class="d-flex">
					<?php if (get_theme_mod('img-upload')): ?>
						<li class="mr-3 img-logo">
							<a href="<?php echo get_theme_mod('mentors-link'); ?>" class="logo-link" target="_blank">
								<img src="<?php echo get_theme_mod('img-upload'); ?>" alt="mentors-logo">
							</a>
						</li>
					<?php endif; ?>

					<?php if (get_theme_mod('img-upload2')): ?>
						<li class="mr-3 img-logo">
							<a href="<?php echo get_theme_mod('mentors-link2'); ?>" class="logo-link">
								<img src="<?php echo get_theme_mod('img-upload2'); ?>" alt="mentors-logo">
							</a>
						</li>
					<?php endif; ?>

					<?php if (get_theme_mod('img-upload3')): ?>
						<li class="mr-3 img-logo">
							<a href="<?php echo get_theme_mod('mentors-link3'); ?>" class="logo-link" target="_blank">
								<img src="<?php echo get_theme_mod('img-upload3'); ?>" alt="mentors-logo">
							</a>
						</li>
					<?php endif; ?>
				</ul>

				<?php if (get_theme_mod('about_us')): ?>
					<p class="pt-3"> <?php echo get_theme_mod('about_us'); ?> </p>
				<?php endif; ?>

			</li>

			<li class="col-12 col-md-6 col-lg-3 offset-lg-1 pb-3">

				<?php if (get_theme_mod('info_name')): ?>
					<h5 class="footer-title">
						<?php echo get_theme_mod('nav_name'); ?>
					</h5>
				<?php endif; ?>

				<nav class="navbar navbar-expand-md navbar-dark pt-3 pr-0 pl-0">
					<?php wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'container_class' => 'd-flex',
							'container_id' => 'navbar-main',
							'menu_class' => 'footer-nav d-flex flex-column  text-left',
							'fallback_cb' => '',
							'menu_id' => 'main-menu',
							'walker' => new understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
				</nav>
			</li>

			<li class="col-12 col-lg-3 pb-5">
				<!--section with contact info -->
				<?php if (get_theme_mod('info_name')): ?>
					<h5 class="footer-title">
						<?php echo get_theme_mod('info_name'); ?>
					</h5>
				<?php endif; ?>

				<ul class="pt-3 pb-3">
					<?php if (get_theme_mod('address_text')): ?>
						<li class="d-flex align-items-center">
							<ul class="d-flex flex-column">
								<li class="contact-item">
									<address>
										<?php echo get_theme_mod('address_city'); ?>
									</address>
								</li>
								<li class="contact-item">
									<address>
										<?php echo get_theme_mod('address_text'); ?>
									</address>
								</li>
								<li class="contact-item">
									<a href="tel:<?php echo get_theme_mod('phone_number'); ?>" class="footer-link">
										<?php echo get_theme_mod('phone_number'); ?>
									</a>
								</li>
								<li class="contact-item">
									<a href="tel:<?php echo get_theme_mod('phone_number2'); ?>" class="footer-link">
										<?php echo get_theme_mod('phone_number2'); ?>
									</a>
								</li>
								<li class="contact-item">
									<a href="mailto:<?php echo get_theme_mod('email_address'); ?>" class="footer-link">
										<?php echo get_theme_mod('email_address'); ?>
									</a>
								</li>
							</ul>
						</li>
					<?php endif; ?>
				</ul>

				<ul class="row social-list">
					<?php if (get_theme_mod('fb_link')): ?>
						<li>
							<a href="<?php echo get_theme_mod('fb_link'); ?>" class="social" target="_blank">
								<i class="fa fa-facebook-square"></i>
							</a>
						</li>
					<?php endif; ?>

					<?php if (get_theme_mod('google_link')): ?>
						<li>
							<a href="<?php echo get_theme_mod('google_link'); ?>" class="social" target="_blank">
								<i class="fa fa-google-plus-square" aria-hidden="true"></i>
							</a>
						</li>
					<?php endif; ?>

					<?php if (get_theme_mod('twitter_link')): ?>
						<li>
							<a href="<?php echo get_theme_mod('twitter_link'); ?>" class="social" target="_blank">
								<i class="fa fa-twitter-square" aria-hidden="true"></i>
							</a>
						</li>
					<?php endif; ?>

					<?php if (get_theme_mod('in_link')): ?>
						<li>
							<a href="<?php echo get_theme_mod('in_link'); ?>" class="social" target="_blank">
								<i class="fa fa-instagram" aria-hidden="true"></i></a>
						</li>
					<?php endif; ?>

					<?php if (get_theme_mod('youtube_link')): ?>
						<li>
							<a href="<?php echo get_theme_mod('youtube_link'); ?>" class="social" target="_blank">
								<i class="fa fa-youtube-square" aria-hidden="true"></i>
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</li>
		</ul>

		<div class="siteinfo">
			<time datetime="<?php echo date('Y'); ?>" class="site-date"> <?php echo date('Y'); ?> </time>
			<?php if (get_theme_mod('site-name')): ?>
				<span class="site-right"> <?php echo get_theme_mod('site-name'); ?> </span>
			<?php endif; ?>
		</div>
	</div>
	<a id="arrow-top" href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

</footer>

<?php wp_footer(); ?>



</body>

</html>

