<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'team_member' => array(
        'type' => 'addable-popup',
        'label' => __('Team Members', 'clemo'),
        'desc' => __('Add Team Members Profile', 'clemo'),
        'template' => '{{=name}}',
        'popup-options' => array(
            'image' => array(
                'label' => __('Image', 'clemo'),
                'desc' => __('Upload your team image', 'clemo'),
                'type' => 'upload',
            ),
            'name' => array(
                'label' => __('Name', 'clemo'),
                'desc' => __('Enter your team name', 'clemo'),
                'type' => 'text',
                'value' => 'paul hall'
            ),
            'title' => array(
                'label' => __('Job Title', 'clemo'),
                'desc' => __('Enter your team job title', 'clemo'),
                'type' => 'text',
                'value' => 'art director'
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
