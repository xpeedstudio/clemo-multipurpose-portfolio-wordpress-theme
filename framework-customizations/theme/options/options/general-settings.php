<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'general' => array(
        'title' => __('General', 'clemo'),
        'type' => 'tab',
        'options' => array(
            'general-box' => array(
                'title' => __('General Settings', 'clemo'),
                'type' => 'box',
                'options' => array(
                    'menu_logo' => array(
                        'label' => __('Menu Logo', 'clemo'),
                        'desc' => __('Add your website menu logo', 'clemo'),
                        'type' => 'upload',
                    ),
                   
                ),
            ),
        )
    )
);
