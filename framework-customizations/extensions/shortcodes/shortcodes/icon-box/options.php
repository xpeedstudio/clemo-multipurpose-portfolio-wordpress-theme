<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'iconbox' => array(
        'type' => 'image-picker',
        'label' => __('Box Style', 'clemo'),
        'choices' => array(
            'fw-iconbox-1' => array(
                'small' => array(
                    'height' => 75,
                    'src' => CLEMO_IMAGES . '/image-picker/icon-box-type1.jpg',
                ),
                'large' => array(
                    'height' => 208,
                    'src' => CLEMO_IMAGES . '/image-picker/icon-box-type1.jpg'
                ),
            ),
            'fw-iconbox-2' => array(
                'small' => array(
                    'height' => 75,
                    'src' => CLEMO_IMAGES . '/image-picker/icon-box-type2.jpg',
                ),
                'large' => array(
                    'height' => 208,
                    'src' => CLEMO_IMAGES . '/image-picker/icon-box-type2.jpg'
                ),
            ),
            'fw-iconbox-3' => array(
                'small' => array(
                    'height' => 75,
                    'src' => CLEMO_IMAGES . '/image-picker/icon-box-type3.jpg',
                ),
                'large' => array(
                    'height' => 208,
                    'src' => CLEMO_IMAGES . '/image-picker/icon-box-type3.jpg'
                ),
            ),
        ),
    ),
    'icon' => array(
        'type' => 'icon',
        'label' => __('Choose an Icon', 'clemo'),
    ),
    'title' => array(
        'type' => 'text',
        'label' => __('Title of the Box', 'clemo'),
    ),
    'content' => array(
        'label' => __('Description', 'clemo'),
        'desc' => __('Enter the icon box description', 'clemo'),
        'type' => 'wp-editor',
    ),
);
