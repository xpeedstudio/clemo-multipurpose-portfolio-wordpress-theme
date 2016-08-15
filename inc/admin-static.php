<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Include static files: javascript and css for backend
 */
wp_enqueue_style('startuploading-theme.css', CLEMO_CSS . '/xs_admin.css', null, CLEMO_VERSION);
//wp_enqueue_style('xs-iconfonts.css', CLEMO_CSS . '/iconfont.css', null, CLEMO_VERSION);
