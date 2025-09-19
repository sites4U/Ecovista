<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'tabs' => array(
        'type'          => 'addable-popup',
        'label'         => esc_html__( 'Reviews', 'ecovista' ),
        'popup-title'   => esc_html__( 'Add/Edit review', 'ecovista' ),
        'desc'          => esc_html__( 'Create your reviews slider', 'ecovista' ),
        'template'      => '{{=name}}',
        'popup-options' => array(
            'image' => array(
                'type'  => 'upload',
                'label' => esc_html__('Add a Photo', 'ecovista'),
                'image_only' => true
            ),
            'name'   => array(
                'type'  => 'text',
                'label' => esc_html__('Add name', 'ecovista')
            ),
            'review' => array(
                'type'  => 'textarea',
                'label' => esc_html__('Add review', 'ecovista')
            ),
            'social_text1' => array(
                'type'  => 'text',
                'label' => esc_html__('Add social text 1', 'ecovista'),
                'desc' => esc_html__('Ex: Whatsapp - fa-whatsapp, Twitter - fa-twitter ', 'ecovista'),
            ),
            'social_link1' => array(
                'type'  => 'text',
                'label' => esc_html__('Add social link 1', 'ecovista'),
            ),
            'social_text2' => array(
                'type'  => 'text',
                'label' => esc_html__('Add social text 2', 'ecovista'),
                'desc' => esc_html__('Ex: Whatsapp - fa-whatsapp, Twitter - fa-twitter ', 'ecovista'),
            ),
            'social_link2' => array(
                'type'  => 'text',
                'label' => esc_html__('Add social link 2', 'ecovista'),
            ),
        )
    )
);
