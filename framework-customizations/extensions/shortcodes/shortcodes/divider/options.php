<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'type' => array(
        'label' => __('Type', 'clemo'),
        'desc' => __('Select divider type', 'clemo'),
        'type' => 'image-picker',
        'value' => 'fw-line-solid',
        'choices' => array(
            'fw-line-solid' => array(
                'small' => array(
                    'height' => 50,
                    'src' => CLEMO_IMAGES . '/image-picker/solid.jpg',
                    'title' => __('Solid Line', 'clemo')
                ),
            ),
            'fw-line-dashed' => array(
                'small' => array(
                    'height' => 50,
                    'src' => CLEMO_IMAGES . '/image-picker/dashed.jpg',
                    'title' => __('Dashed Line', 'clemo')
                ),
            ),
            'fw-line-dotted' => array(
                'small' => array(
                    'height' => 50,
                    'src' => CLEMO_IMAGES . '/image-picker/dotted.jpg',
                    'title' => __('Dotted Line', 'clemo')
                ),
            ),
            'fw-line-double' => array(
                'small' => array(
                    'height' => 50,
                    'src' => CLEMO_IMAGES . '/image-picker/double.jpg',
                    'title' => __('Double Line', 'clemo')
                ),
            ),
            'fw-line-thick' => array(
                'small' => array(
                    'height' => 50,
                    'src' => CLEMO_IMAGES . '/image-picker/thick.jpg',
                    'title' => __('Thick Line', 'clemo')
                ),
            ),
            'fw-divider-space' => array(
                'small' => array(
                    'height' => 50,
                    'src' => CLEMO_IMAGES . '/image-picker/space_gap.jpg',
                    'title' => __('Space', 'clemo')
                ),
            ),
        ),
    ),
    'divider_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'size' => array(
                'label' => __('Height', 'clemo'),
                'desc' => __('Select the top and bottom margin in px', 'clemo'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'space-sm' => __('Small', 'clemo'),
                    'space-md' => __('Medium', 'clemo'),
                    'space-lg' => __('Large', 'clemo'),
                    'custom' => __('Custom', 'clemo'),
                ),
                'value' => 'space-md'
            ),
        ),
        'choices' => array(
            'custom' => array(
                'margin_top' => array(
                    'label' => __('Margin Top', 'clemo'),
                    'desc' => __('Enter margin-top in px', 'clemo'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'type' => 'short-text',
                    'value' => ''
                ),
                'margin_bottom' => array(
                    'label' => __('Margin Bottom', 'clemo'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'desc' => __('Enter margin-bottom in px', 'clemo'),
                    'type' => 'short-text',
                    'value' => ''
                ),
            ),
            'no' => array(),
        ),
        'show_borders' => false,
    ),
    'width' => array(
        'label' => __('Width', 'clemo'),
        'desc' => __('Select the width size in %', 'clemo'),
        'type' => 'radio-text',
        'choices' => array(
            '25' => __('25%', 'clemo'),
            '50' => __('50%', 'clemo'),
            '100' => __('100%', 'clemo'),
        ),
        'custom' => 'custom_width',
        'value' => '100'
    ),
    'bg_color' => array(
        'label' => __('Color', 'clemo'),
        'desc' => __('Select divider color', 'clemo'),
        'value' => '',
        'type' => 'color-picker'
    ),
    'special_divider' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'clemo'),
                'desc' => __('Make a special divider by adding an icon or text to it', 'clemo'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'none',
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'clemo'),
                    'text' => __('Text', 'clemo'),
                    'icon' => __('Icon', 'clemo'),
                ),
            )
        ),
        'choices' => array(
            'text' => array(
                'title_text' => array(
                    'label' => __('', 'clemo'),
                    'desc' => __('This text will be displayed on the divider', 'clemo'),
                    'type' => 'text',
                    'value' => '',
                ),
                'color' => array(
                    'label' => __('Text Color', 'clemo'),
                    'desc' => __('Select the text color', 'clemo'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'show_bg' => array(
                    'type' => 'switch',
                    'label' => __('Background', 'clemo'),
                    'desc' => __('Add a background to your text?', 'clemo'),
                    'value' => 'no',
                    'right-choice' => array(
                        'value' => 'yes',
                        'label' => __('Yes', 'clemo'),
                    ),
                    'left-choice' => array(
                        'value' => 'no',
                        'label' => __('No', 'clemo'),
                    ),
                ),
                'position' => array(
                    'label' => __('Position', 'clemo'),
                    'desc' => __('Select text position', 'clemo'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => clemo_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'clemo')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => clemo_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'clemo')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => clemo_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'clemo')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'clemo'),
                    'desc' => __('Select divider size', 'clemo'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => __('Small', 'clemo'),
                        'fw-divider-size-md' => __('Medium', 'clemo'),
                        'fw-divider-size-lg' => __('Large', 'clemo'),
                    ),
                ),
            ),
            'icon' => array(
                'icon_class' => array(
                    'type' => 'icon',
                    'label' => __('', 'clemo')
                ),
                'color' => array(
                    'label' => __('Icon Color', 'clemo'),
                    'desc' => __('Select the icon color', 'clemo'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'position' => array(
                    'label' => __('Position', 'clemo'),
                    'desc' => __('Select icon position', 'clemo'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => clemo_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'clemo')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => clemo_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'clemo')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => clemo_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'clemo')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'clemo'),
                    'desc' => __('Select divider size', 'clemo'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => __('Small', 'clemo'),
                        'fw-divider-size-md' => __('Medium', 'clemo'),
                        'fw-divider-size-lg' => __('Large', 'clemo'),
                    ),
                ),
            ),
            'none' => array(),
        ),
        'show_borders' => false,
    ),
    'link_id' => array(
        'type' => 'text',
        'label' => __('Link ID', 'clemo'),
        'desc' => __('Enter a custom CSS id for this divider', 'clemo'),
        'help' => sprintf("%s", __('Use this ID in any URL link in the page in order to anchor link to this divider', 'clemo')),
        'value' => '',
    ),
    'class' => array(
        'label' => __('Custom Class', 'clemo'),
        'desc' => __('Enter custom CSS class', 'clemo'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'clemo'),
        'type' => 'text',
        'value' => '',
    ),
);
