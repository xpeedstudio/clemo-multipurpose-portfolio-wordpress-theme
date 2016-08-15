<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'testimonials' => array(
        'label' => __('Testimonials', 'clemo'),
        'popup-title' => __('Add/Edit Testimonial', 'clemo'),
        'desc' => __('Here you can add, remove and edit your Testimonials.', 'clemo'),
        'type' => 'addable-popup',
        'add-button-text' => 'Add Testimonal',
        'template' => '{{=name}}',
        'popup-options' => array(
            'name' => array(
                'label' => __('Name', 'clemo'),
                'desc' => __('Enter the Name of the Person', 'clemo'),
                'type' => 'text',
                'value' => 'frank sims'
            ),
            'title' => array(
                'label' => __('Title', 'clemo'),
                'desc' => __('Enter the job title of the Person', 'clemo'),
                'type' => 'text',
                'value' => 'Photographers'
            ),
            'content' => array(
                'label' => __('Quote', 'clemo'),
                'desc' => __('Enter the testimonial here', 'clemo'),
                'type' => 'textarea',
                'teeny' => true
            ),
            'image' => array(
                'label' => __('Photo', 'clemo'),
                'desc' => __('Upload your favorite photo', 'clemo'),
                'type' => 'upload',
            ),
        )
    ),
);
