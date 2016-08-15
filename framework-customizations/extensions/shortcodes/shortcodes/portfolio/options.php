<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'portfolios' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'portfolio_style' => array(
                'label' => __('Portfolio Style', 'clemo'),
                'type' => 'image-picker',
                'value' => 'portfolio-1',
                'desc' => __('Select Portfolio style.', 'clemo'),
                'choices' => array(
                    'portfolio-1' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => CLEMO_IMAGES . '/image-picker/portfolio-1.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => CLEMO_IMAGES . '/image-picker/portfolio-1.png'
                        ),
                    ),
                    'portfolio-2' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => CLEMO_IMAGES . '/image-picker/portfolio-2.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => CLEMO_IMAGES . '/image-picker/portfolio-2.png'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'portfolio-1' => array(
                'portfolio_item' => array(
                    'type' => 'addable-popup',
                    'label' => __('Portfolio Item', 'clemo'),
                    'desc' => __('Add Portfolio Items', 'clemo'),
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'image' => array(
                            'label' => esc_html__('Image', 'clemo'),
                            'desc' => esc_html__('Upload an image', 'clemo'),
                            'type' => 'upload'
                        ),
                        'title' => array(
                            'label' => esc_html__('Title', 'clemo'),
                            'type' => 'text',
                            'value' => 'golfino awards'
                        ),
                        'category' => array(
                            'label' => esc_html__('Category', 'clemo'),
                            'type' => 'text',
                            'value' => 'print design',
                            'desc' => 'Input the portfolio category text',
                        ),
                    ),
                ),
            ),
            'portfolio-2' => array(
                'portfolio_item' => array(
                    'type' => 'addable-popup',
                    'label' => __('Portfolio Item', 'clemo'),
                    'desc' => __('Add Portfolio Items', 'clemo'),
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'title' => array(
                            'label' => __('Title', 'clemo'),
                            'desc' => __('Enter Title', 'clemo'),
                            'type' => 'text',
                            'value' => 'Project',
                        ),
                        'image' => array(
                            'label' => __('Image', 'clemo'),
                            'desc' => __('Upload your portfolios image', 'clemo'),
                            'value' => false,
                            'type' => 'upload'
                        ),
                     
                    ),
                ),
            ),
        ),
        'show_borders' => false,
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
