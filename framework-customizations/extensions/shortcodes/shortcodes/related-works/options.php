<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'team_member' => array(
        'type' => 'addable-popup',
        'label' => __('Related Works', 'clemo'),
        'desc' => __('Add Related Works Profile', 'clemo'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Title', 'clemo'),
                'desc' => __('Enter your Related Works title', 'clemo'),
                'type' => 'text',
                'value' => 'letters art project'
            ),
            'category' => array(
                'label' => __('Category', 'clemo'),
                'desc' => __('Enter your Related Works category', 'clemo'),
                'type' => 'text',
                'value' => 'print design'
            ),
        ),
    ),
    'class' => array(
        'label' => __('Custom Class', 'clemo'),
        'desc' => __('Enter custom CSS class', 'clemo'),
        'type' => 'text',
        'value' => '',
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css.', 'clemo'),
    ),
);
