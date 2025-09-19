<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<section class="contacts-wrap p-100" id="block-contacts">
    <div class="container">
        <div class="contacts-box">
            <div class="contacts-left">
                <div class="title-wrap">
                    <div class="title-icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/icons/title-icon-white.svg" alt="Icon">
                    </div>
                    <h2 class="title"><?php echo ($atts['title2']) ?></h2>
                    <p class="subtitle"><?php echo ($atts['subtitle']) ?></p>
                </div>

                <?php echo do_shortcode($atts['form_shortcode']); ?>

            </div>

            <div class="contacts-right">
                <div class="contacts-title"><?php echo ($atts['title1']) ?></div>
                <div class="contacts-info">
                    <a href="<?php echo ($atts['phone_link']) ?>" class="contacts-item">
                        <span class="contacts-icon"><i class="fa fa-phone"></i></span>
                        <span><?php echo ($atts['phone']) ?></span>
                    </a>
                    <div class="contacts-item">
                        <span class="contacts-icon"><i class="fa fa-envelope"></i></span>
                        <a href="<?php echo ($atts['email_link']) ?>"><?php echo ($atts['email']) ?></a>
                    </div>
                    <div class="contacts-item">
                        <span class="contacts-icon"><i class="fa fa-map-marker"></i></span>
                        <span><?php echo ($atts['address']) ?></span>
                    </div>

                </div>
                <div class="contacts-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1656.0636921994326!2d-118.37745260160524!3d33.88637300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b469568169ed%3A0x3291feaf6e727632!2zMjAyMiBXYXJmaWVsZCBBdmUsIFJlZG9uZG8gQmVhY2gsIENBIDkwMjc4LCDQodCo0JA!5e0!3m2!1sru!2skz!4v1709559041220!5m2!1sru!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>