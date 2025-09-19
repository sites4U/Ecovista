<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'title1'   => array(
        'type'  => 'text',
        'label' => esc_html__('Title right', 'ecovista')
    ),
    'title2'   => array(
        'type'  => 'text',
        'label' => esc_html__('Title left', 'ecovista')
    ),
    'subtitle'   => array(
        'type'  => 'text',
        'label' => esc_html__('Subtitle', 'ecovista')
    ),
    'form_shortcode'   => array(
        'type'  => 'text',
        'label' => esc_html__('Form shortcode', 'ecovista')
    ),
    'phone' => array(
        'type'  => 'text',
        'label' => esc_html__('Add a phone text', 'ecovista'),
    ),
    'phone_link' => array(
        'type'  => 'text',
        'label' => esc_html__('Add a phone link', 'ecovista'),
    ),
    'email'   => array(
        'type'  => 'text',
        'label' => esc_html__('Add an email text', 'ecovista')
    ),
    'email_link'   => array(
        'type'  => 'text',
        'label' => esc_html__('Add an email link', 'ecovista')
    ),
    'address'   => array(
        'type'  => 'text',
        'label' => esc_html__('Add address', 'ecovista')
    ),
    'maps'   => array(
        'type'  => 'textarea',
        'label' => esc_html__('Add maps', 'ecovista')
    ),

);
