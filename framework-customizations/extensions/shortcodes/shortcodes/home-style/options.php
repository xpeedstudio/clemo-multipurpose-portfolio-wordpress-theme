<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'sliders' => array(
        'type' => 'addable-popup',
        'label' => __('Home Slider', 'guitar'),
        'size' => 'large',
        'desc' => __('Add Home Slider Details', 'clemo'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Title', 'clemo'),
                'type' => 'text',
                'value' => 'we are clemo.',
                'desc' => __('Type Your Homepage Title', 'clemo'),
            ),
            'subtitle' => array(
                'label' => __('Sub Title', 'clemo'),
                'type' => 'text',
                'value' => 'professionals in the creative industries',
                'desc' => __('Type Your Homepage SubTitle', 'clemo'),
            ),
            'btn_txt' => array(
                'label' => __('Button Text', 'clemo'),
                'type' => 'text',
                'value' => 'learn more',
                'desc' => __('Type Your Homepage Button Text', 'clemo'),
            ),
            'btn_link' => array(
                'label' => __('Button Link', 'clemo'),
                'type' => 'text',
                'value' => '#',
                'desc' => __('Insert Your Homepage Button Link', 'clemo'),
            ),
        )
    )
);
