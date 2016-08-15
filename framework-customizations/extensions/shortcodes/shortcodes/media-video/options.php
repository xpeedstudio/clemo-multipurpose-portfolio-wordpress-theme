<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'video' => array(
        'label' => __('Video', 'clemo'),
        'desc' => __('Enter Youtube or Vimeo video URL', 'clemo'),
        'type' => 'text',
    ),
    'width' => array(
        'label' => __('Width', 'clemo'),
        'desc' => __('Video width in pixels', 'clemo'),
        'type' => 'short-text',
        'value' => '',
    ),
    'height' => array(
        'label' => __('Height', 'clemo'),
        'desc' => __('Video height in pixels', 'clemo'),
        'type' => 'short-text',
        'value' => '',
    ),
    'frame' => array(
        'type' => 'switch',
        'value' => '',
        'label' => __('Video Border', 'clemo'),
        'desc' => __('Add a border to your video?', 'clemo'),
        'left-choice' => array(
            'value' => '',
            'label' => __('No', 'clemo'),
        ),
        'right-choice' => array(
            'value' => 'fw-video-frame',
            'label' => __('Yes', 'clemo'),
        )
    ),
    'class' => array(
        'attr' => array('class' => 'border-bottom-none'),
        'label' => __('Custom Class', 'clemo'),
        'desc' => __('Enter custom CSS class', 'clemo'),
        'type' => 'text',
        'help' => __('You can use this class to further style this shortcode.', 'clemo'),
        'value' => '',
    ),
);
