<?php
/**
 * The template for displaying all pages
 * Template name: Main Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecovista
 */

get_header();
?>

	<main id="primary" class="site-main">

		<main class="main">

            <?= the_content() ?>



			<section class="numbers-wrap" id="block-numbers" style="background-image: url('images/numbers-bg.jpg');">
				<div class="container">
					<div class="numbers-row">
						<div class="numbers-item">
							<div class="numbers-num">500+</div>
							<div class="numbers-desc">завершенных <br> проектов</div>
						</div>
						<div class="numbers-item">
							<div class="numbers-num">15</div>
							<div class="numbers-desc">лет опыта</div>
						</div>
						<div class="numbers-item">
							<div class="numbers-num">900+</div>
							<div class="numbers-desc">довольных клиентов</div>
						</div>
						<div class="numbers-item">
							<div class="numbers-num">20</div>
							<div class="numbers-desc">наград</div>
						</div>
					</div>
				</div>
			</section>

			<section class="team-wrap p-100 bg-gray" id="block-team">
				<div class="container">
					<div class="title-wrap">
						<div class="title-icon">
							<img src="images/title-icon.svg" alt="Иконка">
						</div>
						<h2 class="title">Наша команда</h2>
						<p class="subtitle">Наша команда готова воплотить ваши мечты в реальность</p>
					</div>

					<div class="team-row">
						<div class="team-item">
							<div class="team-thumb">
								<img src="images/team-1.jpg" alt="Команда">
							</div>
							<h3 class="team-name">Изабелла Росси</h3>
							<div class="team-spec">Ландшафтный дизайнер</div>
						</div>
						<div class="team-item">
							<div class="team-thumb">
								<img src="images/team-2.jpg" alt="Команда">
							</div>
							<h3 class="team-name">Игорь Протопский</h3>
							<div class="team-spec">Гидроинженер</div>
						</div>
						<div class="team-item">
							<div class="team-thumb">
								<img src="images/team-3.jpg" alt="Команда">
							</div>
							<h3 class="team-name">Алиса Старолесьева</h3>
							<div class="team-spec">Растениевод и садовод</div>
						</div>
						<div class="team-item">
							<div class="team-thumb">
								<img src="images/team-4.jpg" alt="Команда">
							</div>
							<h3 class="team-name">Дмитрий 	Васнецов</h3>
							<div class="team-spec">Профессионал по <br> благоустройству и декору</div>
						</div>
					</div>
				</div>
			</section>

			<section class="reviews-wrap p-100" id="block-reviews">
				<div class="container">
					<div class="swiper swiper-reviews">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="reviews-item">
									<div class="reviews-thumb">
										<img src="images/review-avatar.jpg" alt="Аватар">
									</div>
									<h3 class="reviews-title">Анна Белозерова</h3>
									<div class="reviews-text">
										Профессионализм команды по ландшафтному дизайну поразил меня. Они творчески подошли к созданию уникального дизайна моего сада, учли все мои пожелания. Результат — настоящее произведение искусства прямо у меня во дворе!
									</div>
									<div class="reviews-social">
										<a href="https://whatsapp.com" target="_blank"><i class="fa fa-whatsapp"></i></a>
										<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="reviews-item">
									<div class="reviews-thumb">
										<img src="images/review-avatar.jpg" alt="Аватар">
									</div>
									<h3 class="reviews-title">Анна Белозерова</h3>
									<div class="reviews-text">
										Профессионализм команды по ландшафтному дизайну поразил меня. Они творчески подошли к созданию уникального дизайна моего сада, учли все мои пожелания. Результат — настоящее произведение искусства прямо у меня во дворе!
									</div>
									<div class="reviews-social">
										<a href="https://whatsapp.com" target="_blank"><i class="fa fa-whatsapp"></i></a>
										<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="reviews-item">
									<div class="reviews-thumb">
										<img src="images/review-avatar.jpg" alt="Аватар">
									</div>
									<h3 class="reviews-title">Анна Белозерова</h3>
									<div class="reviews-text">
										Профессионализм команды по ландшафтному дизайну поразил меня. Они творчески подошли к созданию уникального дизайна моего сада, учли все мои пожелания. Результат — настоящее произведение искусства прямо у меня во дворе!
									</div>
									<div class="reviews-social">
										<a href="https://whatsapp.com" target="_blank"><i class="fa fa-whatsapp"></i></a>
										<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="swiper-pagination"></div>
					</div>
				</div>
			</section>

			<section class="gallery-wrap p-100" id="block-gallery">
				<div class="container">
					<div class="gallery-top">
						<div class="gallery-title">
							<span class="gallery-icon">
								<img src="images/title-icon-white.svg" alt="Иконка">
							</span>
							<span class="gallery-title-text">Галерея</span>
						</div>
						<ul class="gallery-tab">
							<li><a href="#gallery-all" class="is-active">Все</a></li>
							<li><a href="#gallery-space">Пространства на заднем дворе</a></li>
							<li><a href="#gallery-flowers">Цветники</a></li>
							<li><a href="#gallery-terassa">Террасы и патио</a></li>
							<li><a href="#gallery-park">Городские парки</a></li>
						</ul>
					</div>

					<div class="grid" id="gallery-all">
						<div class="grid-sizer"></div>
						<div class="grid-item">
							<a href="images/gallery-1.jpg"><img src="images/gallery-1.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-2.jpg"><img src="images/gallery-2.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-3.jpg"><img src="images/gallery-3.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-4.jpg"><img src="images/gallery-4.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-6.jpg"><img src="images/gallery-6.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-7.jpg"><img src="images/gallery-7.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-8.jpg"><img src="images/gallery-8.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-5.jpg"><img src="images/gallery-5.jpg" alt="Галерея"></a>
						</div>
					</div>

					<div class="grid hidden" id="gallery-space">
						<div class="grid-sizer"></div>
						<div class="grid-item">
							<a href="images/gallery-1.jpg"><img src="images/gallery-1.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-2.jpg"><img src="images/gallery-2.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-3.jpg"><img src="images/gallery-3.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-4.jpg"><img src="images/gallery-4.jpg" alt="Галерея"></a>
						</div>
					</div>

					<div class="grid hidden" id="gallery-flowers">
						<div class="grid-sizer"></div>
						<div class="grid-item">
							<a href="images/gallery-9.jpg"><img src="images/gallery-9.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-11.jpg"><img src="images/gallery-11.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-12.jpg"><img src="images/gallery-12.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-13.jpg"><img src="images/gallery-13.jpg" alt="Галерея"></a>
						</div>
					</div>

					<div class="grid hidden" id="gallery-terassa">
						<div class="grid-sizer"></div>
						<div class="grid-item">
							<a href="images/gallery-14.jpg"><img src="images/gallery-14.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-15.jpg"><img src="images/gallery-15.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-8.jpg"><img src="images/gallery-8.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-9.jpg"><img src="images/gallery-9.jpg" alt="Галерея"></a>
						</div>
					</div>

					<div class="grid hidden" id="gallery-park">
						<div class="grid-sizer"></div>
						<div class="grid-item">
							<a href="images/gallery-4.jpg"><img src="images/gallery-4.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-15.jpg"><img src="images/gallery-15.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-12.jpg"><img src="images/gallery-12.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-9.jpg"><img src="images/gallery-9.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-9.jpg"><img src="images/gallery-9.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-15.jpg"><img src="images/gallery-15.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-12.jpg"><img src="images/gallery-12.jpg" alt="Галерея"></a>
						</div>
						<div class="grid-item">
							<a href="images/gallery-4.jpg"><img src="images/gallery-4.jpg" alt="Галерея"></a>
						</div>
					</div>

				</div>
			</section>

			<section class="partners-wrap p-100" id="block-partners">
				<div class="container">
					<div class="title-wrap">
						<div class="title-icon">
							<img src="images/title-icon.svg" alt="Иконка">
						</div>
						<h2 class="title">Наши партнеры</h2>
						<p class="subtitle">Наши надежные союзники</p>
					</div>

					
					<div class="swiper swiper-partners">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="partners-item"><img src="images/partner-1.svg" alt="Partner"></div>
							</div>
							<div class="swiper-slide">
								<div class="partners-item"><img src="images/partner-2.svg" alt="Partner"></div>
							</div>
							<div class="swiper-slide">
								<div class="partners-item"><img src="images/partner-3.svg" alt="Partner"></div>
							</div>
							<div class="swiper-slide">
								<div class="partners-item"><img src="images/partner-4.svg" alt="Partner"></div>
							</div>
							<div class="swiper-slide">
								<div class="partners-item"><img src="images/partner-1.svg" alt="Partner"></div>
							</div>
							<div class="swiper-slide">
								<div class="partners-item"><img src="images/partner-2.svg" alt="Partner"></div>
							</div>
							<div class="swiper-slide">
								<div class="partners-item"><img src="images/partner-3.svg" alt="Partner"></div>
							</div>
							<div class="swiper-slide">
								<div class="partners-item"><img src="images/partner-4.svg" alt="Partner"></div>
							</div>
						</div>
					
						<div class="swiper-scrollbar"></div>
					</div>
				</div>
			</section>

			<section class="contacts-wrap p-100" id="block-contacts" style="background-image: url(images/contact-bg.jpg);">
				<div class="container">
					<div class="contacts-box">
						<div class="contacts-left">
							<div class="title-wrap">
								<div class="title-icon">
									<img src="images/title-icon-white.svg" alt="Иконка">
								</div>
								<h2 class="title">Связаться с нами</h2>
								<p class="subtitle">Если у Вас остались вопросы то напишите нам, мы Вам перезвоним</p>
							</div>

							<form>
								<fieldest class="input-50">
									<input type="text" name="Имя" placeholder="Ваше имя *" required>
									<input type="tel" name="Телефон" placeholder="Ваш телефон *" required>
								</fieldest>
								<fieldest class="input-50">
									<input type="text" name="Email" placeholder="Ваш email">
									<select>
										<option disabled selected>Выберите услугу</option>
										<option>Индивидуальный дизайн сада</option>
										<option>Экологическая зеленая архитектура</option>
										<option>Проектирование и планировка садов</option>
										<option>Системы автоматического полива и освещения</option>
									</select>
								</fieldest>
								<fieldset class="input-100">
									<textarea name="Сообщение" placeholder="Сообщение" cols="50" rows="10"></textarea>
								</fieldset>
								<div class="button text-center">
									<button>Отправить</button>
								</div>
							</form>
						</div>

						<div class="contacts-right">
							<div class="contacts-title">Контакты</div>
							<div class="contacts-info">
								<a href="tel:+7 950 457 5654" class="contacts-item">
									<span class="contacts-icon"><i class="fa fa-phone"></i></span>
									<span>+7 950 457 5654</span>
								</a>
								<div class="contacts-item">
									<span class="contacts-icon"><i class="fa fa-map-marker"></i></span>
									<span>Хаас Авеню, Торранс 86</span>
								</div>
								<div class="contacts-item">
									<span class="contacts-icon"><i class="fa fa-envelope"></i></span>
									<span>ecovista@gmail.com</span>
								</div>
							</div>
							<div class="contacts-map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1656.0636921994326!2d-118.37745260160524!3d33.88637300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b469568169ed%3A0x3291feaf6e727632!2zMjAyMiBXYXJmaWVsZCBBdmUsIFJlZG9uZG8gQmVhY2gsIENBIDkwMjc4LCDQodCo0JA!5e0!3m2!1sru!2skz!4v1709559041220!5m2!1sru!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>

			</main>

	</main><!-- #main -->

<?php
get_footer();
