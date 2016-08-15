<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'blog_settings' => array(
        'title' => __('Blog Settings', 'clemo'),
        'type' => 'tab',
        'options' => array(
            'header-posts-box' => array(
                'title' => __('Posts Header', 'clemo'),
                'type' => 'box',
                'options' => array(
                    'general_posts_header' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'posts_header_group' => array(
                                'type' => 'group',
                                'options' => array(
                                    'header_title' => array(
                                        'type' => 'text',
                                        'label' => 'Blog Title',
                                        'desc' => 'Add your blog hero title',
                                    ),
                                    'header_image' => array(
                                        'label' => __('Header Image', 'clemo'),
                                        'desc' => __('Upload a header image', 'clemo'),
                                        'help' => __("This default header image will be used for all your posts.", 'clemo'),
                                        'type' => 'upload'
                                    ),
                                    'header_overlay_color' => array(
                                        'label' => __('', 'clemo'),
                                        'desc' => __('Select the image overlay color', 'clemo'),
                                        'help' => __('', 'clemo'),
                                        'value' => 'rgba(255,255,255,0.55)',
                                        'type' => 'rgba-color-picker'
                                    ),
                                )
                            ),
                        )
                    )
                )
            ),
            'blog' => array(
                'title' => __('Blog Settings', 'clemo'),
                'type' => 'box',
                'options' => array(
                    'blog_display_settings' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'post_date' => array(
                                'label' => __('Post Date', 'clemo'),
                                'desc' => __('Show post date?', 'clemo'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'clemo')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'clemo')
                                ),
                                'value' => 'yes',
                            ),
                            'post_author' => array(
                                'label' => __('Post Author', 'clemo'),
                                'desc' => __('Show post author?', 'clemo'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'clemo')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'clemo')
                                ),
                                'value' => 'yes',
                            ),
                            'post_categories' => array(
                                'label' => __('Post Categories', 'clemo'),
                                'desc' => __('Show post categories?', 'clemo'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'clemo')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'clemo')
                                ),
                                'value' => 'yes',
                            ),
                            'post_comment' => array(
                                'label' => __('Post Comment', 'clemo'),
                                'desc' => __('Show post Comment?', 'clemo'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'clemo')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'clemo')
                                ),
                                'value' => 'yes',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
