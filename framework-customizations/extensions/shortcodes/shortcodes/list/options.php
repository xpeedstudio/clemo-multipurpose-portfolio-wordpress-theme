<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'list_group' => array(
        'type' => 'group',
        'options' => array(
            'list_items' => array(
                'type' => 'addable-popup',
                'label' => __('List Items', 'clemo'),
                'desc' => __('Add list items', 'clemo'),
                'template' => '{{=item}}',
                'popup-options' => array(
                    'sublist_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'item' => array(
                                'label' => __('Item', 'clemo'),
                                'desc' => __('Enter an item in list', 'clemo'),
                                'type' => 'text',
                            ),
                          
                        )
                    ),
                    'btn_link_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'link' => array(
                                'label' => __('Link', 'clemo'),
                                'desc' => __('you can add link if you want', 'clemo'),
                                'type' => 'text',
                            ),
                            'target' => array(
                                'type' => 'switch',
                                'label' => __('', 'clemo'),
                                'desc' => __('Open link in new window?', 'clemo'),
                                'value' => '_self',
                                'right-choice' => array(
                                    'value' => '_blank',
                                    'label' => __('Yes', 'clemo'),
                                ),
                                'left-choice' => array(
                                    'value' => '_self',
                                    'label' => __('No', 'clemo'),
                                ),
                            ),
                        )
                    ),
                ),
            ),
            'separator' => array(
                'type' => 'switch',
                'label' => __('', 'clemo'),
                'desc' => __('Separate each list item by a line?', 'clemo'),
                'value' => '_self',
                'right-choice' => array(
                    'value' => 'list-bordered',
                    'label' => __('Yes', 'clemo'),
                ),
                'left-choice' => array(
                    'value' => '',
                    'label' => __('No', 'clemo'),
                ),
            ),
        )
    ),
    'list_type' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'clemo'),
                'desc' => __('Make a numbered list or add an icon to list items', 'clemo'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'list-default',
                'type' => 'radio',
                'choices' => array(
                    'list-default' => __('None', 'clemo'),
                    'list-numbers' => __('Number', 'clemo'),
                    'list-icon' => __('Icon', 'clemo'),
                ),
            )
        ),
        'choices' => array(
            'list-default' => array(),
            'list-numbers' => array(),
            'list-icon' => array(
                'icon' => array(
                    'type' => 'icon',
                    'label' => __('', 'clemo')
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => __('Custom Class', 'clemo'),
        'desc' => __('Enter custom CSS class', 'clemo'),
        'type' => 'text',
        'value' => '',
        'help' => __('You can use this class to further style this shortcode', 'clemo'),
    ),
);
