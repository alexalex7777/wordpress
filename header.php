<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">		
	<?php wp_head(); ?>
	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-117247258-1', 'auto');
		ga('send', 'pageview');
	</script>
	<!-- End Google Analytics -->
	<script>
		document.addEventListener( 'wpcf7mailsent', function( event ) {
			ga('send', 'event', 'Contact Form', 'submit');
		}, false );
	</script>
</head>
<body <?php body_class(); ?>>	
	<!-- arrow -->
	<a name="top"></a>

	<!--=========== top fixed menu ===================================-->
	<div class="top-navbar-mobile container-fluid" id="header-top-navbar">
		<nav class="row">
			<!--************** The logo ***********************-->
			<div class="col-5 col-lg-3 offset-lg-1 front-page-logo-bg">
				<!-- Your site title as branding in the menu -->
				<?php if ( ! has_custom_logo() ) { ?>

				<?php if ( is_front_page() && is_home() ) : ?>

					<h1 class="navbar-brand mb-0">
						<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>

				<?php else : ?>

					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						<?php bloginfo( 'name' ); ?>
					</a>

				<?php endif; ?>


				<?php } else {
					the_custom_logo();
				} ?><!-- end custom logo -->
			</div>	
			<div class="col-1 top-navbar-mobile-fa-bg">
				<i class="fa fa-bars top-icon-bar" aria-hidden="true"></i>								
			</div>

			<div class="top-navbar-desktop col-7">
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'row justify-content-end mt-2',
						'container_id'    => '',
						'menu_class'      => 'd-flex',
						'fallback_cb'     => '',
						'menu_id'         => '',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
					); ?>
				</div>
				<!--======================= background menu =====================================-->

				<div class="container top-bg-header-menu" id="mobile">
					<nav class="row">			
						<div class="col-12 heder-bg-menu">
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'col-12',
									'fallback_cb'     => '',
									'menu_id'         => '',
									'walker'          => new understrap_WP_Bootstrap_Navwalker(),
								)
								); ?>
							</div>
						</nav><!-- .site-navigation -->
					</div>
				</nav>
			</div>
			<!--====================== end top fixed menu ====================================-->

			<!--====================== mobile menu ==================================-->
			<div class="header-mobile-menu container-fluid hm-menu">
				<div class="row">
					<!--************** The logo ***********************-->
					<div class="col-5 offset-1 front-page-logo">
						<!-- Your site title as branding in the menu -->
						<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0">
								<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
									<?php bloginfo( 'name' ); ?>
								</a>
							</h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
								<?php bloginfo( 'name' ); ?>
							</a>

						<?php endif; ?>


						<?php } else {
							the_custom_logo();
						} ?><!-- end custom logo -->
					</div>
					<div class="col-2 offset-2 offset-sm-4">
						<i class="fa fa-bars icon-bar" aria-hidden="true"></i>								
					</div>
				</div>
				<div class="bg-header-menu">
					<nav class="row">			
						<div class="col-12 heder-bg-menu">
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'col-12',
									'fallback_cb'     => '',
									'menu_id'         => '',
									'walker'          => new understrap_WP_Bootstrap_Navwalker(),
								)
								); ?>
							</div>

						</nav><!-- .site-navigation -->
					</div>
					<?php if( is_front_page() ){ ?>
					<div class="row">
						<div class="bottom-right-header-block-mobile col-11 col-md-6">
							<div class="header-text-block">
								<?php if (get_theme_mod('img-upload')): ?>
									<?php echo get_theme_mod('header'); ?>
								<?php endif; ?>
								<!-- Button trigger modal -->
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/img/video.png" alt="go to video">
								</button>
							</div>
						</div>
					</div>
					<?php } else { 					
					}
					?>
				</div>

				<!--=================== desktop menu ============================================-->
				<div class="header-desktop-menu">
					<?php if( is_front_page() ){ ?>		
					<div class="front-page-container-top">
						<div class="container pr-0">
							<div class="row justify-content-end">
								<nav class="navbar  navbar-expand-lg navbar-dark pt-3 pb-3 pr-0">

									<!-- The WordPress Menu goes here -->
									<?php wp_nav_menu(
										array(
											'theme_location'  => 'primary',
											'container_class' => 'collapse navbar-collapse justify-content-end',
											'container_id'    => 'navbarNavDropdown',
											'menu_class'      => 'navbar-nav',
											'fallback_cb'     => '',
											'menu_id'         => 'main-menu-desktop',
											'walker'          => new understrap_WP_Bootstrap_Navwalker(),
										)
										); ?>
									</nav><!-- .site-navigation -->
								</div>
							</div>	
						</div>		
						<div class="container pr-5 pt-4">
							<div class="row">							
								<div class="container">
									<div class="row">
										<!-- ******************* navbar front page ******************* -->
										<!--************** The logo ***********************-->
										<div class="col-lg-6 front-page-logo mt-0">
											<!-- Your site title as branding in the menu -->
											<?php if ( ! has_custom_logo() ) { ?>

											<?php if ( is_front_page() && is_home() ) : ?>

												<h1 class="">
													<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
														<?php bloginfo( 'name' ); ?>
													</a>
												</h1>

											<?php else : ?>

												<a class="" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
													<?php bloginfo( 'name' ); ?>
												</a>

											<?php endif; ?>


											<?php } else {
												the_custom_logo();
											} ?><!-- end custom logo -->
										</div>

										<div class="col-lg-6 right-header-block pt-5">
											<div class="row bottom-right-header-block">
												<div class="header-text-block">
													<?php if (get_theme_mod('img-upload')): ?>
														<?php echo get_theme_mod('header'); ?>
													<?php endif; ?>
													<!-- Button trigger modal -->
													<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/img/video.png" alt="go to video">
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>									
							</div>			
						</div>
					</div>
					<!--=================== end navbar front page ================-->

					<?php } else { ?>

					<!-- ******************* navbar remaining page ******************* -->

					<nav class="navbar  navbar-expand-lg navbar-dark">

						<!--************** The logo ***********************-->
						<div class="front-page-logo pl-5 pt-2">
							<!-- Your site title as branding in the menu -->
							<?php if ( ! has_custom_logo() ) { ?>

							<?php if ( is_front_page() && is_home() ) : ?>

								<h1 class="navbar-brand mb-0">
									<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
										<?php bloginfo( 'name' ); ?>
									</a>
								</h1>

							<?php else : ?>

								<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
									<?php bloginfo( 'name' ); ?>
								</a>

							<?php endif; ?>


							<?php } else {
								the_custom_logo();
							} ?><!-- end custom logo -->
						</div>	
						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'collapse navbar-collapse justify-content-end',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu-desktop',
								'walker'          => new understrap_WP_Bootstrap_Navwalker(),
							)
							); ?>
						</nav><!-- .site-navigation -->
						<?php
					}
					?>

				</div>
				<!--=============== modal ================-->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<!--section with main video-->
								<?php if( get_field('video-front-page') ): ?>
									<div class="main-video embed-responsive embed-responsive-16by9">
										<iframe width="100%" height="auto" src="<?php the_field('video-front-page'); ?> " frameborder="0" allowfullscreen></iframe>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
