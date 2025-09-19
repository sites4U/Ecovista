<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'title'   => array(
        'type'  => 'text',
        'label' => esc_html__('Title', 'ecovista')
    ),
    'subtitle'   => array(
        'type'  => 'text',
        'label' => esc_html__('Subtitle', 'ecovista')
    ),
    'tabs' => array(
        'type'          => 'addable-popup',
        'label'         => esc_html__( 'Pictures', 'ecovista' ),
        'popup-title'   => esc_html__( 'Add/Edit pictures', 'ecovista' ),
        'desc'          => esc_html__( 'Create your slider', 'ecovista' ),
        'template'      => '{{=title}}',
        'popup-options' => array(
            'image' => array(
                'type'  => 'upload',
                'label' => esc_html__('Add an image', 'ecovista'),
                'image_only' => true
            ),
            'title'   => array(
                'type'  => 'text',
                'label' => esc_html__('Add description', 'ecovista')
            ),
            'subtitle'   => array(
                'type'  => 'text',
                'label' => esc_html__('Add description', 'ecovista')
            ),
        )
    )

);
