<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>



<section class="features-wrap" id="block-features">
    <div class="container">
        <div class="features-row">
            <?php foreach ( fw_akg( 'tabs', $atts, array() ) as $tab ) : ?>
            <div class="features-item">
                <div class="features-icon">
                    <i class="fa <?php echo $tab['icon'] ?>"></i>
                </div>
                <h4 class="features-title"><?php echo $tab['title'] ?></h4>
                <div class="features-desc">
                    <?php echo $tab['subtitle'] ?>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>