<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'funfact_number' => array(
        'label' => __('Funfact Number', 'clemo'),
        'desc' => __('Add FunFact number which will Counting', 'clemo'),
        'type' => 'text',
        'value' => '3,800',
    ),
    'funfact_title' => array(
        'label' => __('Funfact name', 'clemo'),
        'desc' => __('Add FunFact Name', 'clemo'),
        'type' => 'text',
        'value' => 'project complete',
    ),
);
