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
						<a href="index.html"><img src="images/logo.svg" alt="Ecovista"></a>
					</div>
					<div class="footer-desc">
						<p>Откройте двери к утонченному миру природной красоты с нашими услугами по ландшафтному дизайну</p>
					</div>
					<div class="footer-social">
						<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="https://whatsapp.com" target="_blank"><i class="fa fa-whatsapp"></i></a>
					</div>
				</div>
				<div class="footer-right">
					<nav class="footer-nav">
						<h4>Навигация</h4>
						<ul>
							<li><a href="#block-about" class="anchor-link">О нас</a></li>
							<li><a href="#block-services" class="anchor-link">Услуги</a></li>
							<li><a href="#block-gallery" class="anchor-link">Галерея</a></li>
							<li><a href="#block-features" class="anchor-link">Преимущества</a></li>
							<li><a href="#block-team" class="anchor-link">Команда</a></li>
							<li><a href="#block-contacts" class="anchor-link">Контакты</a></li>
						</ul>
					</nav>
					<nav class="footer-nav">
						<h4>Услуги</h4>
						<ul>
							<li><a href="#block-services" class="anchor-link">Индивидуальный <br> дизайн сада</a></li>
							<li><a href="#block-services" class="anchor-link">Экологическая зеленая <br> архитектура</a></li>
							<li><a href="#block-services" class="anchor-link">Проектирование и <br> планировка садов</a></li>
							<li><a href="#block-services" class="anchor-link">Системы автоматического <br> полива и освещения</a></li>
						</ul>
					</nav>
					<div class="footer-nav">
						<h4>Контакты</h4>
						<div class="footer-info">
							<a href="tel:+7 950 457 5654" class="footer-info-item">
								<span class="footer-info-icon"><i class="fa fa-phone"></i></span>
								<span>+7 950 457 5654</span>
							</a>
							<div class="footer-info-item">
								<span class="footer-info-icon"><i class="fa fa-map-marker"></i></span>
								<span>Хаас Авеню, Торранс 86</span>
							</div>
							<div class="footer-info-item">
								<span class="footer-info-icon"><i class="fa fa-envelope"></i></span>
								<span>ecovista@gmail.com</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-copyright">
				2024 © Evovista Все права защищены
			</div>
		</div>
	</footer>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
