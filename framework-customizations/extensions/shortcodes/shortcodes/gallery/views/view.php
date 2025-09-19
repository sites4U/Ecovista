<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<section class="gallery-wrap p-100" id="block-gallery">
    <div class="container">

        <div class="gallery-top">
            <div class="gallery-title">
							<span class="gallery-icon">
								<img src="<?php echo get_template_directory_uri();?>/assets/icons/title-icon-white.svg" alt="Icon">
							</span>
                <span class="gallery-title-text"><?php echo ($atts['title']) ?></span>
            </div>

            <ul class="gallery-tab">
                <?php
                $first_tab = true;
                foreach ( fw_akg( 'tabs', $atts, array() ) as $tab ) : $active_class = $first_tab ? 'is-active' : '';?>
                <li><a href="<?php echo $tab['tab_link'] ?>" class="<?php echo $active_class; ?>" ><?php echo $tab['tab_title'] ?></a></li>
                <?php $first_tab = false; endforeach; ?>
            </ul>
        </div>

        <?php
        $first_iteration = true;
        foreach ( fw_akg( 'gallery', $atts, array() ) as $item ) : $hidden_class = $first_iteration ? '' : 'hidden'; ?>
        <div class="grid <?= $hidden_class ?>" id="<?php echo $item['gallery_id'] ?>">
            <div class="grid-sizer"></div>
            <?php foreach ($item['image'] as $image) : ?>
            <div class="grid-item ">
                <a href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt=""></a>
            </div>
            <?php endforeach;  $first_iteration = false; ?>
        </div>
        <?php endforeach; ?>




    </div>
</section>