<?php

if (!defined('FW')) {
    die('Forbidden');
}

$manifest = array();

$manifest['name'] = __('Clemo', 'clemo');
$manifest['uri'] = 'http://themeforest.com/user/XpeedStudio';
$manifest['description'] = __('clemo wordpress theme', 'clemo');
$manifest['version'] = '1.0';
$manifest['author'] = 'XpeedStuio';
$manifest['author_uri'] = 'http://themeforest.com/user/XpeedStudio';
$manifest['requirements'] = array(
    'wordpress' => array(
        'min_version' => '4.1',
    /* 'max_version' => '4.99.9' */
    ),
);

$manifest['id'] = 'scratch';

$manifest['supported_extensions'] = array(
    'page-builder' => array(),
    'seo' => array(),
    'backups' => array(),
    'forms' => array(),
    'mailer' => array(),
    'analytics' => array(),
);
