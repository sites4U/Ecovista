<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<section class="banner-wrap">
	<div class="swiper swiper-banner">
		<div class="swiper-wrapper">

            <?php foreach ( fw_akg( 'slider', $atts, array() ) as $slider ) : ?>
			<div class="swiper-slide">
				<div class="banner-item" style="background-image: url(<?php echo $slider['slider_background']['url'] ?>);">
					<h2 class="banner-title"><?php echo $slider['slider_title'] ?></h2>
					<div class="banner-desc">
						<p><?php echo $slider['slider_desc'] ?></p>
					</div>
					<div class="button">
						<a href="<?php echo $slider['slider_btn_link'] ?>" class="anchor-link"><?php echo $slider['slider_btn_text'] ?></a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

		<div class="swiper-pagination"></div>

		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</section>
