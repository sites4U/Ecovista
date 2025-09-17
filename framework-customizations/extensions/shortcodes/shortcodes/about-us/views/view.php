<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$image = '';
if(isset( $atts['image']['url'])){
    $alt = get_post_meta($atts['image']['attachment_id'], '_wp_attachment_image_alt', true);
    $image = (isset( $atts['image']['url']) && $atts['image']['url']) ? '<img src = "'.$atts['image']['url'].'" alt="'.$alt .'">' : '';
}

$icon = '';
if(isset( $atts['icon']['url'])){
    $alt = get_post_meta($atts['icon']['attachment_id'], '_wp_attachment_image_alt', true);
    $icon = (isset( $atts['icon']['url']) && $atts['icon']['url']) ? '<img src = "'.$atts['icon']['url'].'" alt="'.$alt .'">' : '';
}

?>



<section class="about-wrap p-100" id="block-about">
    <div class="container">
        <div class="about-row">
            <?php if(!empty($image)): ?>
            <div class="about-left">
                <?php echo $image; ?>
            </div>
            <?php endif; ?>

                        <div class="about-right">
                <div class="title-wrap">
                    <div class="title-icon">
                        <?php echo $icon; ?>
                    </div>
                    <?php if (!empty($atts['title'])) : ?>
                    <h2 class="title"><?php echo esc_attr($atts['title']); ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($atts['subtitle'])) : ?>
                    <p class="subtitle"><?php echo esc_attr($atts['subtitle']); ?></p>
                    <?php endif; ?>
                </div>

                <?php if (!empty($atts['desc'])) : ?>
                <div class="about-desc">
                    <p><?php echo esc_attr($atts['desc']); ?></p>
                </div>
                <?php endif; ?>
                <div class="button">
                    <a href="<?php echo esc_attr($atts['btn_link']); ?>" class="anchor-link"><?php echo esc_attr($atts['btn_text']); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>