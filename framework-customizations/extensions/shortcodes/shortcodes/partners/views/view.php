<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<section class="partners-wrap p-100" id="block-partners">
    <div class="container">
        <div class="title-wrap">
            <div class="title-icon">
                <img src="<?php echo get_template_directory_uri();?>/assets/icons/title-icon.svg" alt="Icon">
            </div>
            <?php if (!empty($atts['title'])) : ?>
            <h2 class="title"><?php echo ($atts['title']) ?></h2>
            <?php endif; ?>
            <?php if (!empty($atts['subtitle'])) : ?>
            <p class="subtitle"><?php echo ($atts['subtitle']) ?></p>
            <?php endif; ?>
        </div>


        <div class="swiper swiper-partners">
            <div class="swiper-wrapper">
                <?php foreach ( fw_akg( 'tabs', $atts, array() ) as $tab ) :
                $alt = get_post_meta($tab['image']['attachment_id'], '_wp_attachment_image_alt', true);
                ?>
                <div class="swiper-slide">
                    <div class="partners-item"><img src="<?php echo $tab['image']['url'] ?>" alt="<?php echo $alt; ?>"></div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</section>