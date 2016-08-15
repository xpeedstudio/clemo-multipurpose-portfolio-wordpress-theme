<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'heading' => array(
        'type' => 'text',
        'label' => __('Heading', 'clemo'),
        'desc' => __('Input Your Call to Action Heading Text', 'clemo'),
        'value' => 'best price'
    ),
    'unit' => array(
        'type' => 'text',
        'label' => __('Price Unit', 'clemo'),
        'desc' => __('Input Your Call to Action Price Unit', 'clemo'),
        'value' => '$999'
    ),
    'category' => array(
        'type' => 'text',
        'label' => __('Category', 'clemo'),
        'desc' => __('Input Your Call to Action Price Category', 'clemo'),
        'value' => 'event'
    ),
    'btn_text' => array(
        'type' => 'text',
        'label' => __('Button Text', 'clemo'),
        'desc' => __('Input Your Call to Action Button Text', 'clemo'),
        'value' => 'get started'
    ),
    'btn_link' => array(
        'type' => 'text',
        'label' => __('Button Link', 'clemo'),
        'desc' => __('Input Your Call to Action Button Link', 'clemo'),
        'value' => '#'
    )
);
