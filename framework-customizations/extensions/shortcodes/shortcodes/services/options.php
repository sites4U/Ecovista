<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
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
    'tabs' => array(
        'type'          => 'addable-popup',
        'label'         => esc_html__( 'Pictures', 'ecovista' ),
        'popup-title'   => esc_html__( 'Add/Edit pictures', 'ecovista' ),
        'desc'          => esc_html__( 'Create your slider', 'ecovista' ),
        'template'      => '{{=desc}}',
        'popup-options' => array(
            'image' => array(
                'type'  => 'upload',
                'label' => esc_html__('Add an image', 'ecovista'),
                'image_only' => true
            ),
            'desc'   => array(
                'type'  => 'text',
                'label' => esc_html__('Add description', 'ecovista')
            ),
        )
    )

);
