<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'slider' => array(
        'type'          => 'addable-popup',
        'label'         => esc_html__( 'Banner-Slider', 'ecovista' ),
        'popup-title'   => esc_html__( 'Add/Edit slider', 'ecovista' ),
        'desc'          => esc_html__( 'Create your slider', 'ecovista' ),
        'template'      => '{{=slider_title}}',
        'popup-options' => array(
            'slider_title'   => array(
                'type'  => 'text',
                'label' => esc_html__('Title', 'ecovista')
            ),
            'slider_desc' => array(
                'type'  => 'textarea',
                'label' => esc_html__('Description', 'ecovista')
            ),
            'slider_btn_text' => array(
                'type'  => 'text',
                'label' => esc_html__('Button text', 'ecovista')
            ),
            'slider_btn_link' => array(
                'type'  => 'text',
                'label' => esc_html__('Button link', 'ecovista')
            ),
            'slider_background' => array(
                'type'  => 'upload',
                'label' => esc_html__('Background picture', 'ecovista'),
                'images_only' => true,
            ),
        )
    )
);
