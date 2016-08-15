<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'footer_settings' => array(
        'title' => __('Footer Settings', 'clemo'),
        'type' => 'tab',
        'options' => array(
            'footer_box' => array(
                'title' => __('Footer Settings', 'clemo'),
                'type' => 'box',
                'options' => array(
                    'footer_heading' => array(
                        'label' => __('Footer text', 'clemo'),
                        'type' => 'wp-editor',
                        'value' => 'Made with  by Bootstrap Themes 2016. All Rights Reserved',
                        'desc' => __('Footer text.', 'clemo'),
                       
                    ),
                ),
            ),
        ),
    ),
);
