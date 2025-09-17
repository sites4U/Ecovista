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

<section class="services-wrap p-100" id="block-services">
    <div class="container">
        <div class="title-wrap">
            <div class="title-icon">
                <?php echo $icon; ?>
            </div>
            <?php if (!empty($atts['title'])) : ?>
            <h2 class="title"><?php echo ($atts['title']) ?></h2>
            <?php endif; ?>
            <?php if (!empty($atts['subtitle'])) : ?>
            <p class="subtitle"><?php echo ($atts['subtitle']) ?></p>
            <?php endif; ?>
        </div>

        <div class="services-row">
            <?php foreach ( fw_akg( 'tabs', $atts, array() ) as $tab ) :
              $alt = get_post_meta($tab['image']['attachment_id'], '_wp_attachment_image_alt', true);
            ?>
            <div class="services-item">
                <div class="services-thumb">
                    <img src="<?php echo $tab['image']['url'] ?>" alt="<?php echo $alt; ?>">
                </div>
                <h3 class="services-title"><?php echo $tab['desc'] ?></h3>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>