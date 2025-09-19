<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'tabs' => array(
        'type'          => 'addable-popup',
        'label'         => esc_html__( 'Numbers', 'ecovista' ),
        'popup-title'   => esc_html__( 'Add/Edit numbers', 'ecovista' ),
        'desc'          => esc_html__( 'Create your numbers', 'ecovista' ),
        'template'      => '{{=number}}',
        'popup-options' => array(
            'number' => array(
                'type'  => 'text',
                'label' => esc_html__('Add a number', 'ecovista'),
            ),
            'desc'   => array(
                'type'  => 'text',
                'label' => esc_html__('Add description', 'ecovista')
            ),
        )
    )

);
