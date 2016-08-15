<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'button_settings' => array(
        'type' => 'addable-popup',
        'label' => 'Button',
        'desc' => 'Add your button',
        'template' => 'Button : {{- label }}',
        'popup-options' => array(
            'style' => array(
                'label' => __('Style', 'CLEMO'),
                'desc' => __('Choose button style', 'CLEMO'),
                'type' => 'image-picker',
                'value' => '',
                'choices' => array(
                    'default' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => CLEMO_IMAGES . '/image-picker/button-style-1.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => CLEMO_IMAGES . '/image-picker/button-style-1.png'
                        ),
                    ),
                    'primary' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => CLEMO_IMAGES . '/image-picker/button-style-2.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => CLEMO_IMAGES . '/image-picker/button-style-2.png'
                        ),
                    ),
                ),
            ),
            'label' => array(
                'label' => __('Button Label', 'CLEMO'),
                'desc' => __('This is the text that appears on your button', 'CLEMO'),
                'type' => 'text',
                'value' => 'Read More'
            ),
            'link' => array(
                'label' => __('Button Link', 'CLEMO'),
                'desc' => __('Where should your button link to', 'CLEMO'),
                'type' => 'text',
                'value' => '#'
            ),
            'target' => array(
                'type' => 'switch',
                'label' => __('Open Link in New Window', 'CLEMO'),
                'desc' => __('Select here if you want to open the linked page in a new window', 'CLEMO'),
                'right-choice' => array(
                    'value' => '_blank',
                    'label' => __('Yes', 'CLEMO'),
                ),
                'left-choice' => array(
                    'value' => '_self',
                    'label' => __('No', 'CLEMO'),
                ),
            ),
            'letter_case' => array(
                'label' => __('Letter Case', 'CLEMO'),
                'desc' => __('Choose a lettercase for your button text', 'CLEMO'),
                'type' => 'select',
                'choices' => array(
                    'uppercase' => __('Uppercase', 'CLEMO'),
                    'capitalize' => __('Capitalize', 'CLEMO'),
                    'lowercase' => __('Lowercase', 'CLEMO'),
                )
            ),
        )
    ),
    'btn_alignment' => array(
        'label' => __('Alignment', 'CLEMO'),
        'desc' => __('Choose button or image alignment', 'CLEMO'),
        'type' => 'image-picker',
        'value' => '',
        'choices' => array(
            '' => array(
                'small' => array(
                    'height' => 50,
                    'src' => CLEMO_IMAGES . '/image-picker/no-align.jpg',
                    'title' => __('None', 'CLEMO')
                ),
            ),
            'text-left' => array(
                'small' => array(
                    'height' => 50,
                    'src' => CLEMO_IMAGES . '/image-picker/left-position.jpg',
                    'title' => __('Left', 'CLEMO')
                ),
            ),
            'text-center' => array(
                'small' => array(
                    'height' => 50,
                    'src' => CLEMO_IMAGES . '/image-picker/center-position.jpg',
                    'title' => __('Center', 'CLEMO')
                ),
            ),
            'text-right' => array(
                'small' => array(
                    'height' => 50,
                    'src' => CLEMO_IMAGES . '/image-picker/right-position.jpg',
                    'title' => __('Right', 'CLEMO')
                ),
            ),
        ),
    ),
    'class' => array(
        'label' => __('Custom Class', 'CLEMO'),
        'desc' => __('Enter custom CSS class', 'CLEMO'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'CLEMO'),
        'type' => 'text',
        'value' => '',
    ),
);
