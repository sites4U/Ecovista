<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>


<section class="reviews-wrap p-100" id="block-reviews">
    <div class="container">
        <div class="swiper swiper-reviews">
            <div class="swiper-wrapper">
                <?php foreach ( fw_akg( 'tabs', $atts, array() ) as $tab ) :
                    $alt = get_post_meta($tab['image']['attachment_id'], '_wp_attachment_image_alt', true);
                    ?>
                    <div class="swiper-slide">
                        <div class="reviews-item">
                            <div class="reviews-thumb">
                                <img src="<?php echo $tab['image']['url'] ?>" alt="<?php echo $alt; ?>">
                            </div>
                            <h3 class="reviews-title"><?php echo $tab['name'] ?></h3>
                            <?php if(!empty( $tab['review'])) : ?>
                                <div class="reviews-text">
                                    <?php echo $tab['review'] ?>
                                </div>
                            <?php endif; ?>
                            <div class="reviews-social">
                                <a href="<?php echo $tab['social_link1'] ?>" target="_blank"><i class="fa <?php echo $tab['social_text1'] ?>"></i></a>
                                <a href="<?php echo $tab['social_link2'] ?>" target="_blank"><i class="fa <?php echo $tab['social_text2'] ?>"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>