<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'image'   => array(
        'type'  => 'upload',
        'label' => esc_html__('Add image', 'ecovista'),
        'image_only' => true
    ),
    'icon'   => array(
        'type'  => 'upload',
        'label' => esc_html__('Add icon', 'ecovista'),
        'image_only' => true
    ),
    'title'   => array(
        'type'  => 'text',
        'label' => esc_html__('Title', 'ecovista')
    ),
    'subtitle'   => array(
        'type'  => 'text',
        'label' => esc_html__('Subtitle', 'ecovista')
    ),
    'desc'   => array(
        'type'  => 'textarea',
        'label' => esc_html__('Description', 'ecovista')
    ),
    'btn_text' => array(
        'type'  => 'text',
        'label' => esc_html__('Button text', 'ecovista')
    ),
    'btn_link' => array(
        'type'  => 'text',
        'label' => esc_html__('Button link', 'ecovista')
    ),
);
