<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Enqueue all theme scripts and styles
 *

  /** --------------------------------------
 * ** REGISTERING THEME ASSETS
 * ** ------------------------------------ */
/**
 * Enqueue styles.
 */
if (!is_admin()) {


    //Framework CSS Essectial files
    wp_enqueue_style('blog.css', CLEMO_CSS . '/blog.css', null, CLEMO_VERSION);
    wp_enqueue_style('main.css', CLEMO_CSS . '/xs_main.css', null, CLEMO_VERSION);


    wp_enqueue_style('cl-slider-pro', CLEMO_CSS . '/slider-pro.css', null, CLEMO_VERSION);
    wp_enqueue_style('cl-font-awesome.min', CLEMO_CSS . '/font-awesome.min.css', null, CLEMO_VERSION);
    wp_enqueue_style('cl-bootstrap.min.css', CLEMO_CSS . '/bootstrap.min.css', null, CLEMO_VERSION);

    wp_enqueue_style('cl-plugin', CLEMO_CSS . '/plugins.css', null, CLEMO_VERSION);
    wp_enqueue_style('cl-stylesheet', CLEMO_CSS . '/stylesheet.css', null, CLEMO_VERSION);

    wp_enqueue_style('cl-style', CLEMO_CSS . '/style.css', null, CLEMO_VERSION);
    
    wp_enqueue_style('cl-responsive', CLEMO_CSS . '/responsive.css', null, CLEMO_VERSION);
}




/**
 * Enqueue scripts.
 */
if (!is_admin()) {
    wp_enqueue_script('cl-bootstrap.min.js', CLEMO_SCRIPTS . '/vendor/bootstrap.min.js', array('jquery'), CLEMO_VERSION, true);
    wp_enqueue_script('cl-plugin', CLEMO_SCRIPTS . '/plugins.js', array('jquery'), CLEMO_VERSION, true);
    wp_enqueue_script('cl-jquery.easing', CLEMO_SCRIPTS . '/jquery.easing.1.3.js', array('jquery'), CLEMO_VERSION, true);
    wp_enqueue_script('cl-jquery.sliderPro', CLEMO_SCRIPTS . '/jquery.sliderPro.min.js', array('jquery'), CLEMO_VERSION, true);
    wp_enqueue_script('cl-masonry', CLEMO_SCRIPTS . '/masonry.min.js', array('jquery'), CLEMO_VERSION, true);
    wp_enqueue_script('cl-fw-form-helpers', CLEMO_SCRIPTS . '/fw-form-helpers.js', array('jquery'), CLEMO_VERSION, true);
    wp_enqueue_script('cl-main', CLEMO_SCRIPTS . '/main.js', array('jquery'), CLEMO_VERSION, true);

    // Load Wordpress Comment js
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}


