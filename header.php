<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package summerschool
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class($pagename); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container wide">
			<div class="row">

				<div class="site-branding">
					<div class="logo desktop">
						<img class="top-left-splodge" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top-left.png" alt="">
						<?php $logo = get_field( 'logo', 'options' ); ?>
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo $logo['url']; ?>" alt="">
						</a>
					</div>
					<div class="logo small">
						<?php $logo_sticky_mobile = get_field( 'logo_sticky_mobile', 'options' ); ?>
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo $logo_sticky_mobile['url']; ?>" alt="">
						</a>
					</div>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<img class="top-right-splodge" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top-right.png" alt="">
					<button class="hamburger menu-toggle hamburger--spin" type="button" aria-controls="primary-menu" aria-expanded="false">
						<span class="hamburger-box ">
							<span class="hamburger-inner"></span>
						</span>
					</button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav>
			
			</div>
		</div>
	</header>

	<?php $bannerimage = get_field( 'banner_image' ); if (!$bannerimage): $bannerimage = get_template_directory_uri() . '/assets/img/inner-bg.jpg'; else: $bannerimage = $bannerimage['url']; endif; ?>
	<section id="banner" class="parallax-window" data-parallax="scroll" data-bleed="50" data-image-src="<?php echo $bannerimage; ?>">
		<div class="blurb">
			<div class="container">
				<div class="row">
					<div class="columns twelve">
			
					<?php if ( is_home() || is_front_page() ): ?>

						<img class="home-blurb-splodge" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-blurb-bg.png" alt="">
						<div class="text home-page-text">
							<?php if (get_field( 'banner_text' )): ?>
							<h2><?php the_field( 'banner_text' ); ?></h2>
							<?php endif; ?>
							<?php if (get_field( 'banner_link' )): ?>
							<a href="<?php the_field( 'banner_link' ); ?>" title="Find out more">Find out more</a>
							<?php endif; ?>
						</div>

					<?php elseif (is_page( 'account' )): ?>>

					<?php elseif (is_page( 'login' )): ?>

						<img class="inner-blurb-splodge" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-blurb-bg.png" alt="">
						<div class="text 404-page-text">
						<?php if ($_GET['action'] == 'forgot_password'): ?>
							<h1>Reset your password</h1>
						<?php else: ?>
							<h1>Login to your account</h1>
						<?php endif; ?>
						</div>

					<?php elseif ( is_404() ): ?>

						<img class="inner-blurb-splodge" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-blurb-bg.png" alt="">
						<div class="text 404-page-text">
							<h1>404</h1>
							<h2>Page Not Found</h2>
						</div>

					<?php else: ?>

						<img class="inner-blurb-splodge" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/inner-blurb-bg.png" alt="">
						<div class="text default-page-text">
							<?php if (get_field( 'banner_text' )): ?>
							<h2><?php the_field( 'banner_text' ); ?></h2>
							<?php endif; ?>
							<?php if (get_field( 'banner_link' )): ?>
							<a href="<?php the_field( 'banner_link' ); ?>" title="Find out more">Find out more</a>
							<?php endif; ?>
						</div>

					<?php endif ?>
					</div>

				</div>
			</div>
		</div>
		<div class="after">
			<?php if ( is_home() || is_front_page() ): ?>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-splash-left-new.png" alt="Light Green brush stroke">
			<?php else: ?>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-splash-right-new.png" alt="Light Green brush stroke">
			<?php endif ?>
		</div>
	</section>

	<div id="content" class="site-content">
