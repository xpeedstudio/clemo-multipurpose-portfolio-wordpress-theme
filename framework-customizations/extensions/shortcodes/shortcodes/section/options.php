<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'section_title' => array(
        'type' => 'text',
        'label' => __('Sorting title', 'clemo'),
        'value' => '',
        'desc' => __('Enter a name (it is for internal use and will not appear on the front end) ', 'clemo')
    ),
    'is_fullwidth' => array(
        'label' => __('Full Width', 'clemo'),
        'type' => 'switch',
    ),
    'default_spacing' => array(
        'type' => 'radio',
        'label' => __('Section Spacing', 'clemo'),
        'desc' => __('Top and bottom spacing of this section', 'clemo'),
        'value' => 'sections',
        'choices' => array(
            'sections' => __('Default Spacing', 'clemo'),
            'min-spacing' => __('Min Spacing', 'clemo'),
            'no-spacing' => __('No Spacing', 'clemo'),
        ),
    ),
    'height' => array(
        'label' => __('Height', 'clemo'),
        'desc' => __("Select the section's height in px (Ex: 400) (dont include with <b>px</b>)", 'clemo'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'clemo'),
            'fw-section-height-sm' => __('small', 'clemo'),
            'fw-section-height-md' => __('medium', 'clemo'),
            'fw-section-height-lg' => __('large', 'clemo'),
        ),
        'custom' => 'custom_width',
        'help' => __('This option to set extra height in your section. we have used three classs for extra height which fw-section-height-sm = 350px, fw-section-height-md= 450px , fw-section-height-lg = 650px. you can use your custom height to like just add 400 (dont include with px)', 'clemo'),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'clemo'),
                'desc' => __('Select the background for your section', 'clemo'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'clemo'),
                    'color' => __('Color', 'clemo'),
                    'image' => __('Image', 'clemo'),
                    'video' => __('Video', 'clemo'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'clemo'),
                    'desc' => __('Select the background color', 'clemo'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            ),
            'image' => array(
                'background_image' => array(
                    'label' => __('', 'clemo'),
                    'type' => 'background-image',
                    'choices' => array(//	in future may will set predefined images
                    )
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'clemo'),
                            'desc' => __('Enable image overlay color?', 'clemo'),
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
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'clemo'),
                                'desc' => __('Select the overlay color', 'clemo'),
                                'value' => 'rgba(0,0,0,0.35)',
                                'type' => 'rgba-color-picker'
                            ),
                        ),
                    ),
                ),
            ),
            'video' => array(
                'video' => array(
                    'label' => __('', 'clemo'),
                    'desc' => __('Insert a YouTube or Vimeo video URL', 'clemo'),
                    'type' => 'text',
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'clemo'),
                            'desc' => __('Enable video overlay color?', 'clemo'),
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
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'clemo'),
                                'desc' => __('Select the overlay color', 'clemo'),
                                'value' => 'rgba(0,0,0,0.55)',
                                'type' => 'rgba-color-picker'
                            ),
                        ),
                    ),
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
    ),
);
