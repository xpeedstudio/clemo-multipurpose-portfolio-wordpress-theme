<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'type' => array(
        'label' => __('Type', 'clemo'),
        'desc' => __('Select the notification type', 'clemo'),
        'value' => 'fw-alert-info',
        'type' => 'image-picker',
        'choices' => array(
            'success' => array(
                'small' => array(
                    'height' => 50,
                    'src' => clemo_IMAGES . '/image-picker/notification-congratulation.jpg',
                    'title' => __('Congratulations', 'clemo')
                ),
            ),
            'info' => array(
                'small' => array(
                    'height' => 50,
                    'src' => clemo_IMAGES . '/image-picker/notification-information.jpg',
                    'title' => __('Information', 'clemo')
                ),
            ),
            'warning' => array(
                'small' => array(
                    'height' => 50,
                    'src' => clemo_IMAGES . '/image-picker/notification-warning.jpg',
                    'title' => __('Alert', 'clemo')
                ),
            ),
            'danger' => array(
                'small' => array(
                    'height' => 50,
                    'src' => clemo_IMAGES . '/image-picker/notification-error.jpg',
                    'title' => __('Error', 'clemo')
                ),
            ),
        ),
    ),
    'message' => array(
        'label' => __('Message', 'clemo'),
        'desc' => __('Notification message', 'clemo'),
        'type' => 'text',
        'value' => __('Message!', 'clemo'),
    ),
);
