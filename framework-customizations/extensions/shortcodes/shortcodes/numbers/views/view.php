<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>




<section class="numbers-wrap" id="block-numbers">
    <div class="container">
        <div class="numbers-row">
            <?php foreach ( fw_akg( 'tabs', $atts, array() ) as $tab ) : ?>
                <div class="numbers-item">
                    <div class="numbers-num"><?php echo $tab['number'] ?></div>
                    <div class="numbers-desc"><?php echo $tab['desc'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
