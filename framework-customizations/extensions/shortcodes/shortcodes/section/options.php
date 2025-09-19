<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'ecovista'),
		'type'         => 'switch',
        'value' => true
	),
	'background_color' => array(
		'label' => esc_html__('Background Color', 'ecovista'),
		'desc'  => esc_html__('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => esc_html__('Background Image', 'ecovista'),
		'desc'    => esc_html__('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
    'background_position' => array(
		'label'   => esc_html__('Background position', 'ecovista'),
		'type'    => 'text',
		'choices' => array(//	in future may will set predefined images
		)
	),
    'background_size' => array(
		'label'   => esc_html__('Background size', 'ecovista'),
		'type'    => 'text',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => esc_html__('Background Video', 'fw'),
		'desc'  => esc_html__('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	)
);
