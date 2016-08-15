<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'type' => 'upload',
        'label' => __('Choose Image', 'clemo'),
        'desc' => __('Either upload a new, or choose an existing image from your media library', 'clemo')
    ),
//    'frame' => array(
//        'type' => 'switch',
//        'value' => '',
//        'label' => '',
//        'desc' => __('Add a border to your image?', 'clemo'),
//        'left-choice' => array(
//            'value' => '',
//            'label' => __('No', 'clemo'),
//        ),
//        'right-choice' => array(
//            'value' => 'fw-image-frame',
//            'label' => __('Yes', 'clemo'),
//        )
//    ),
    'image_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'select_size' => array(
                'label' => __('Size', 'clemo'),
                'desc' => __('Select the image size', 'clemo'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'value' => 'auto',
                'choices' => array(
                    'auto' => __('auto', 'clemo'),
                    'custom' => __('Custom', 'clemo')
                ),
            ),
        ),
        'choices' => array(
            'custom' => array(
                'width' => array(
                    'label' => '',
                    'desc' => __('Image width in pixels', 'clemo'),
                    'type' => 'short-text',
                    'value' => '',
                ),
                'position' => array(
                    'label' => '',
                    'desc' => __('Select image position', 'clemo'),
                    'type' => 'image-picker',
                    'value' => 'fw-single-image-center',
                    'choices' => array(
                        'fw-single-image-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => clemo_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'clemo')
                            ),
                        ),
                        'fw-single-image-center' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => clemo_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'clemo')
                            ),
                        ),
                        'fw-single-image-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => clemo_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'clemo')
                            ),
                        ),
                    ),
                ),
            ),
        )
    ),
    'height' => array(
        'label' => __('Height', 'clemo'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'clemo'),
        ),
        'custom' => 'custom_height',
        'help' => __('This option to use your custom height to like just add 500 (dont include with px)', 'clemo'),
    ),
    'image-link-group' => array(
        'type' => 'group',
        'options' => array(
            'link' => array(
                'type' => 'text',
                'label' => __('Image Link', 'clemo'),
                'desc' => __('Where should your image link to?', 'clemo')
            ),
            'target' => array(
                'type' => 'switch',
                'label' => __('Open Link in New Window', 'clemo'),
                'desc' => __('Select here if you want to open the linked page in a new window', 'clemo'),
                'right-choice' => array(
                    'value' => '_blank',
                    'label' => __('Yes', 'clemo'),
                ),
                'left-choice' => array(
                    'value' => '_self',
                    'label' => __('No', 'clemo'),
                ),
            ),
        )
    )
);

