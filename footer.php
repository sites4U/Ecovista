<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecovista
 */

?>

<footer class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="footer-left">
					<div class="footer-logo">
                        <?php the_custom_logo(); ?>
					</div>
                    <?php if (get_theme_mod('footer_text_left')):?>
					<div class="footer-desc">
						<p><?php echo get_theme_mod('footer_text_left',''); ?></p>
					</div>
					<?php endif; ?>
					<div class="footer-social">
                        <?php if (get_theme_mod('footer_twitter')):?>
                            <a href="<?php echo get_theme_mod('footer_twitter',''); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?>
                        <?php if (get_theme_mod('footer_whatsapp')):?>
                            <a href="<?php echo get_theme_mod('footer_whatsapp',''); ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
                        <?php endif; ?>
					</div>
				</div>
				<div class="footer-right">
					<nav class="footer-nav">
						<h4>Menu</h4>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-footer',
                                    'menu_id'        => 'menu-footer',
                                    'menu_container' => false,
                                )
                            );
                            ?>
					</nav>
					<nav class="footer-nav">
						<h4>Services</h4>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-services',
                                'menu_id'        => 'menu-services',
                                'menu_container' => false,
                            )
                        );
                        ?>
					</nav>
					<div class="footer-nav">
						<h4>Our Contacts</h4>
						<div class="footer-info">
                            <?php if (get_theme_mod('footer_phone')):?>
							<a href="<?php echo get_theme_mod('footer_phone_link','ecovista'); ?>" class="footer-info-item">
								<span class="footer-info-icon"><i class="fa fa-phone"></i></span>
								<span><?php echo get_theme_mod('footer_phone',''); ?></span>
                            <?php endif; ?>
							</a>
							<div class="footer-info-item">
                                <?php if (get_theme_mod('footer_email')):?>
								<span class="footer-info-icon"><i class="fa fa-envelope"></i></span>
								<a href="<?php echo get_theme_mod('footer_email_link','ecovista'); ?>"><?php echo get_theme_mod('footer_email','ecovista'); ?></a>
                                <?php endif; ?>
							</div>
                            <div class="footer-info-item">
                                <?php if (get_theme_mod('footer_address')):?>
                                    <span class="footer-info-icon"><i class="fa fa-map-marker"></i></span>
                                    <a href="<?php echo get_theme_mod('footer_address_link','ecovista'); ?>" target="_blank"><?php echo get_theme_mod('footer_address','ecovista'); ?></a>
                                <?php endif; ?>
                            </div>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-copyright">
                <?php if (get_theme_mod('footer_copyright')):?>
                    <?php echo date('Y'); ?> <?php echo get_theme_mod('footer_copyright','ecovista'); ?>
                <?php endif; ?>
			</div>
		</div>
	</footer>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
