<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'informations' => array(
        'label' => __('Informations', 'clemo'),
        'popup-title' => __('Add/Edit Information', 'clemo'),
        'desc' => __('Here you can add, remove and edit your Information.', 'clemo'),
        'type' => 'addable-popup',
        'add-button-text' => 'Add Information',
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Title', 'clemo'),
                'desc' => __('Enter the title of the info', 'clemo'),
                'type' => 'text',
            ),
            'icon' => array(
                'label' => __('Icon', 'clemo'),
                'desc' => __('Select your favorite icon', 'clemo'),
                'type' => 'icon',
            ),
        )
    ),
    'socials' => array(
        'label' => __('Socials', 'clemo'),
        'popup-title' => __('Add/Edit Socials', 'clemo'),
        'desc' => __('Here you can add, remove and edit your Social.', 'clemo'),
        'type' => 'addable-popup',
        'add-button-text' => 'Add Social Item',
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Title', 'clemo'),
                'desc' => __('Enter the title but not appear in front-end', 'clemo'),
                'type' => 'text',
            ),
            'icon' => array(
                'label' => __('Icon', 'clemo'),
                'desc' => __('Select your favorite icon', 'clemo'),
                'type' => 'icon'
            ),
            'link' => array(
                'label' => __('Link', 'clemo'),
                'desc' => __('Input the social link', 'clemo'),
                'type' => 'text',
                'value' => '#'
            ),
        )
    ),
    'class' => array(
        'attr' => array('class' => 'border-bottom-none'),
        'label' => __('Custom Class', 'clemo'),
        'desc' => __('Enter custom CSS class', 'clemo'),
        'type' => 'text',
        'help' => __('You can use this class to further style this shortcode by adding your custom CSS in the <strong>style.css</strong> file. This file is located on your server in the <strong>child-theme</strong> folder.', 'clemo'),
        'value' => '',
    ),
);
