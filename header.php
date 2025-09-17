<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecovista
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">


<header class="header">
		<div class="header-top">
			<div class="container">
				<div class="header-row">
					<?php if (get_theme_mod('header_text_left')):?>
						<div class="header-text"><?php echo get_theme_mod('header_text_left',''); ?></div>
					<?php endif; ?>
					<div class="header-info">
					<?php if (get_theme_mod('header_phone')):?>
							<a href="tel:<?php echo get_theme_mod('header_phone',''); ?>" class="header-info-item">
								<i class="fa fa-phone"></i>
								<span><?php echo get_theme_mod('header_phone',''); ?></span>
							</a>
						<?php endif; ?>
						<?php if (get_theme_mod('header_address')):?>
							<div class="header-info-item">
								<i class="fa fa-map-marker"></i>
								<span><?php echo get_theme_mod('header_address',''); ?></span>
							</div>
						<?php endif; ?>
						<?php if (get_theme_mod('header_schedule')):?>
							<div class="header-info-item">
								<i class="fa fa-calendar-o"></i>
								<span><?php echo get_theme_mod('header_schedule',''); ?></span>
							</div>
						<?php endif; ?>
					</div>
					<div class="header-social">
					<?php if (get_theme_mod('header_twitter')):?>
						<a href="<?php echo get_theme_mod('header_twitter',''); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
					<?php endif; ?>
					<?php if (get_theme_mod('header_whatsapp')):?>
						<a href="<?php echo get_theme_mod('header_whatsapp',''); ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
					<?php endif; ?>	
					</div>
				</div>
			</div>
		</div>

		<div class="header-bottom">
			<div class="container">
				<div class="header-bottom-row">
					<div class="header-logo">
						<?php the_custom_logo(); ?>
					</div>
					<nav class="header-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-header',
									'menu_id'        => 'menu-header',
									'menu_container' => false,
								)
							);
						?>
					</nav>
					<div class="hamburger">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="header-mobile">
		<div class="header-mobile-top">
			<div class="header-mobile-logo">
				<a href="index.html"><img src="images/logo.svg" alt="Ecovista"></a>
			</div>
			<div class="header-mobile-close">
				<i class="fa fa-times" aria-hidden="true"></i>
			</div>
		</div>
		<nav class="header-nav">
		<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-header',
									'menu_id'        => 'menu-header',
									'menu_container' => false,
								)
							);
						?>
		</nav>
		<div class="header-info">
			<?php if (get_theme_mod('header_phone')):?>
					<a href="tel:<?php echo get_theme_mod('header_phone',''); ?>" class="header-info-item">
						<i class="fa fa-phone"></i>
						<span><?php echo get_theme_mod('header_phone',''); ?></span>
					</a>
				<?php endif; ?>
				<?php if (get_theme_mod('header_address')):?>
					<div class="header-info-item">
						<i class="fa fa-map-marker"></i>
						<span><?php echo get_theme_mod('header_address',''); ?></span>
					</div>
				<?php endif; ?>
				<?php if (get_theme_mod('header_schedule')):?>
					<div class="header-info-item">
						<i class="fa fa-calendar-o"></i>
						<span><?php echo get_theme_mod('header_schedule',''); ?></span>
					</div>
				<?php endif; ?>
			</div>
			<div class="header-social">
			<?php if (get_theme_mod('header_twitter')):?>
				<a href="<?php echo get_theme_mod('header_twitter',''); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
			<?php endif; ?>
			<?php if (get_theme_mod('header_whatsapp')):?>
				<a href="<?php echo get_theme_mod('header_whatsapp',''); ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
			<?php endif; ?>	
			</div>
	</div>

	