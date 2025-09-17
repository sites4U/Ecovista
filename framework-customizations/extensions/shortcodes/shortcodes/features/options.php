<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'tabs' => array(
        'type'          => 'addable-popup',
        'label'         => esc_html__( 'Features', 'ecovista' ),
        'popup-title'   => esc_html__( 'Add/Edit features', 'ecovista' ),
        'desc'          => esc_html__( 'Create your slider', 'ecovista' ),
        'template'      => '{{=title}}',
        'popup-options' => array(
            'icon' => array(
                'type'  => 'text',
                'label' => esc_html__('Add an Icon', 'ecovista')
            ),
            'title'   => array(
                'type'  => 'text',
                'label' => esc_html__('Title', 'ecovista')
            ),
            'subtitle' => array(
                'type'  => 'textarea',
                'label' => esc_html__('Subtitle', 'ecovista')
            ),
        )
    )
);
