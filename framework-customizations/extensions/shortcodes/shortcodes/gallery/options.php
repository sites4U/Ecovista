<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'title'   => array(
        'type'  => 'text',
        'label' => esc_html__('Title', 'ecovista')
    ),
    'tabs' => array(
        'type'          => 'addable-popup',
        'label'         => esc_html__( 'Tabs for Gallery', 'ecovista' ),
        'popup-title'   => esc_html__( 'Add/Edit tabs', 'ecovista' ),
        'desc'          => esc_html__( 'Create your tabs', 'ecovista' ),
        'template'      => '{{=tab_title}}',
        'popup-options' => array(
            'tab_title' => array(
                'type'  => 'text',
                'label' => esc_html__('Add a tab title', 'ecovista'),
            ),
            'tab_link' => array(
                'type'  => 'text',
                'label' => esc_html__('Add a tab link', 'ecovista'),
            ),
        )
    ),
    'gallery' => array(
        'type'          => 'addable-popup',
        'label'         => esc_html__( 'Pictures for Gallery', 'ecovista' ),
        'popup-title'   => esc_html__( 'Add/Edit gallery', 'ecovista' ),
        'desc'          => esc_html__( 'Create your gallery', 'ecovista' ),
        'template'      => '{{=gallery_title}}',
        'popup-options' => array(
            'gallery_title' => array(
                'type'  => 'text',
                'label' => esc_html__('Add a gallery title', 'ecovista'),
            ),
            'gallery_id' => array(
                'type'  => 'text',
                'label' => esc_html__('Add a gallery id', 'ecovista'),
            ),
            'image' => array(
                'type'  => 'multi-upload',
                'label' => esc_html__('Add an images', 'ecovista'),
                'image_only' => true
            ),
        )
    ),

);
