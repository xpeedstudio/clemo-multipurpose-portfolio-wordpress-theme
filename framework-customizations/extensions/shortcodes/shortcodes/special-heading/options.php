<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'title' => array(
        'type' => 'text',
        'label' => __('Heading Title', 'clemo'),
        'desc' => __('Write the heading title content', 'clemo'),
    ),
    'heading' => array(
        'type' => 'select',
        'label' => __('Heading Size', 'clemo'),
        'choices' => array(
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
        )
    ),
    'subtitle' => array(
        'type' => 'text',
        'label' => __('Heading Subtitle', 'clemo'),
        'desc' => __('Write the heading subtitle content', 'clemo'),
    ),
    'subheading' => array(
        'type' => 'select',
        'label' => __('Sub Heading Size', 'clemo'),
        'choices' => array(
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
        )
    ),
    'centered' => array(
        'type' => 'switch',
        'label' => __('Centered', 'clemo'),
//		'left-choice' => array(
//			'value' => 'no',
//			'label' => __('No', 'clemo'),
//		),
//		'right-choice' => array(
//			'value' => 'yes',
//			'label' => __('Yes', 'clemo'),
//		),
    ),
    'color' => array(
        'type' => 'color-picker',
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
        'label' => __('Heading Color', 'clemo'),
        'desc' => __('If you want use diffrent color for parallax or video section', 'clemo'),
        'help' => __('If you want use diffrent heading color for parallax or video section. you can easily change from here', 'clemo'),
    ),
    'separator' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'show_separator' => array(
                'type' => 'switch',
                'value' => '',
                'label' => __('Separator', 'clemo'),
                'desc' => __('Show separator?', 'clemo'),
                'left-choice' => array(
                    'value' => 'no',
                    'label' => __('No', 'clemo'),
                ),
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => __('Yes', 'clemo'),
                )
            ),
        ),
    ),
    'class' => array(
        'type' => 'text',
        'label' => __('Custom Class', 'clemo'),
        'desc' => __('Enter a custom CSS class', 'clemo'),
        'help' => __('You can use this class to further style this shortcode by adding your custom CSS.', 'clemo'),
    ),
);
