<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'main' => array(
        'title' => false,
        'type' => 'box',
        'options' => array(
            'Page' => array(
                'title' => __('Page Options', 'clemo'),
                'type' => 'tab',
                'options' => array(
                    'page_sections' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'xs_page_section' => array(
                                'label' => __('This page is a section:', 'clemo'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'on',
                                    'label' => __('Yes', 'clemo')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'clemo')
                                ),
                                'value' => 'no',
                                'desc' => __('If this a <b>One page Section</b>,  set this field to <b>yes</b>. And if this page is not section, set it to <b>no</b>', 'clemo'),
                                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('If this page for one page section. set yes ', 'clemo'), __('For One page always will be <b>yes</b>', 'clemo')
                                ),
                            )
                        ),
                        'choices' => array(
                            'on' => array(
                                'hide_title_from_menu' => array(
                                    'type' => 'switch',
                                    'label' => __('Hide title from menu ?', 'clemo'),
                                    'right-choice' => array(
                                        'value' => 'yes',
                                        'label' => __('Yes', 'clemo')
                                    ),
                                    'left-choice' => array(
                                        'value' => 'no',
                                        'label' => __('No', 'clemo')
                                    ),
                                    'value' => 'no',
                                    'desc' => __('If you dont want to add title(or this page) on menu. you can set yes. if you set yes. this menu will be hide in menu.', 'clemo'),
                                ),
                            ),
                            'no' => array(
                                'header_title' => array(
                                    'type' => 'text',
                                    'label' => 'Page Title',
                                    'desc' => 'Add your Page hero title',
                                ),
                                'header_image' => array(
                                    'label' => __('Page Header Image', 'clemo'),
                                    'desc' => __('Upload a Page header image', 'clemo'),
                                    'help' => __("This default header image will be used for all your Page.", 'clemo'),
                                    'type' => 'upload'
                                ),
                                'header_overlay_color' => array(
                                    'label' => __('', 'clemo'),
                                    'desc' => __('Select the image overlay color', 'clemo'),
                                    'help' => __('', 'clemo'),
                                    'value' => 'rgba(255,255,255,0.55)',
                                    'type' => 'rgba-color-picker'
                                ),
                            ),
                        ),
                        'show_borders' => false,
                    ),
                ),
            ),
        ),
    ),
);


