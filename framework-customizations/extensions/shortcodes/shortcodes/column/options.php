<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'default_padding' => array(
        'type' => 'switch',
        'label' => __('Default Spacing', 'clemo'),
        'desc' => __('Use default left and right spacing?', 'clemo'),
        'help' => __("Default left and right spacings are set to 15px", 'clemo'),
        'value' => '',
        'right-choice' => array(
            'value' => '',
            'label' => __('Yes', 'clemo'),
        ),
        'left-choice' => array(
            'value' => 'fw-col-no-padding',
            'label' => __('No', 'clemo'),
        ),
    ),
    'padding_group' => array(
        'type' => 'group',
        'options' => array(
            'html_label' => array(
                'type' => 'html',
                'value' => '',
                'label' => __('Inner Spacing', 'clemo'),
                'html' => '',
            ),
            'padding_top' => array(
                'label' => false,
                'desc' => __('top', 'clemo'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_right' => array(
                'label' => false,
                'desc' => __('right', 'clemo'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_bottom' => array(
                'label' => false,
                'desc' => __('bottom', 'clemo'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_left' => array(
                'label' => false,
                'desc' => __('left', 'clemo'),
                'type' => 'short-text',
                'value' => '0',
            ),
        )
    ),
    'margin_group' => array(
        'type' => 'group',
        'options' => array(
            'html_label' => array(
                'type' => 'html',
                'value' => '',
                'label' => __('Outer Spacing', 'clemo'),
                'html' => '',
            ),
            'margin_top' => array(
                'label' => false,
                'desc' => __('top', 'clemo'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_right' => array(
                'label' => false,
                'desc' => __('right', 'clemo'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_bottom' => array(
                'label' => false,
                'desc' => __('bottom', 'clemo'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_left' => array(
                'label' => false,
                'desc' => __('left', 'clemo'),
                'type' => 'short-text',
                'value' => '0',
            ),
        )
    ),
    'height' => array(
        'label' => __('Height', 'clemo'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'clemo'),
        ),
        'custom' => 'custom_height',
        'help' => __('This option to use your custom height to like just add 500 (dont include with px)', 'clemo'),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'clemo'),
                'desc' => __('Select the background for your column', 'clemo'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'clemo'),
                    'image' => __('Image', 'clemo'),
                    'bgcolor' => __('Color', 'clemo'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'clemo'),
                    'help' => __('', 'clemo'),
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
                'repeat' => array(
                    'label' => __('', 'clemo'),
                    'desc' => __('Select how will the background repeat', 'clemo'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => 'no-repeat',
                    'choices' => array(
                        'no-repeat' => __('No-Repeat', 'clemo'),
                        'repeat' => __('Repeat', 'clemo'),
                        'repeat-x' => __('Repeat-X', 'clemo'),
                        'repeat-y' => __('Repeat-Y', 'clemo'),
                    )
                ),
                'bg_position_x' => array(
                    'label' => __('Position', 'clemo'),
                    'desc' => __('Select the horizontal background position', 'clemo'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'left' => __('Left', 'clemo'),
                        'center' => __('Center', 'clemo'),
                        'right' => __('Right', 'clemo'),
                    )
                ),
                'bg_position_y' => array(
                    'label' => __('', 'clemo'),
                    'desc' => __('Select the vertical background position', 'clemo'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'top' => __('Top', 'clemo'),
                        'center' => __('Center', 'clemo'),
                        'bottom' => __('Bottom', 'clemo'),
                    )
                ),
                'bg_size' => array(
                    'label' => __('Size', 'clemo'),
                    'desc' => __('Select the background size', 'clemo'),
                    'help' => __('<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'clemo'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'auto' => __('Auto', 'clemo'),
                        'cover' => __('Cover', 'clemo'),
                        'contain' => __('Contain', 'clemo'),
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
                                'help' => __('', 'clemo'),
                                'desc' => __('Select the overlay color', 'clemo'),
                                'type' => 'rgba-color-picker',
                                'value' => 'rgba(0,0,0,0.55)'
                            ),
                        ),
                    ),
                ),
            ),
            'bgcolor' => array(
                'background_color' => array(
                    'label' => __('', 'clemo'),
                    'help' => __('', 'clemo'),
                    'desc' => __('Select the background color', 'clemo'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            )
        ),
        'show_borders' => false,
    ),
    'txtcolor' => array(
        'label' => __('Text Color', 'clemo'),
        'type' => 'color-picker',
        'desc' => 'You can change color also',
    ),
    'txt_align' => array(
        'label' => __('Text Alignment', 'clemo'),
        'desc' => __('Select the alignment for your column', 'clemo'),
        'attr' => array('class' => 'fw-checkbox-float-left'),
        'type' => 'radio',
        'choices' => array(
            'none' => __('None', 'clemo'),
            'text-left' => __('Left', 'clemo'),
            'text-center' => __('Center', 'clemo'),
            'text-right' => __('Right', 'clemo'),
        ),
        'value' => 'none'
    ),
    'animation' => array(
        'label' => __('Animation', 'clemo'),
        'type' => 'select',
        //'value' => 'c',
        'desc' => __('Add animation when your site fast load on browser.', 'clemo'),
        'choices' => array(
            '' => '---',
            array(
                'attr' => array(
                    'label' => __('Attention Effects', 'clemo'),
                ),
                'choices' => array(
                    'fadeIn' => __('fadeIn', 'clemo'),
                    'bounce' => __('bounce', 'clemo'),
                    'flash' => __('flash', 'clemo'),
                    'pulse' => __('pulse', 'clemo'),
                    'rubberBand' => __('rubberBand', 'clemo'),
                    'shake' => __('shake', 'clemo'),
                    'swing' => __('swing', 'clemo'),
                    'tada' => __('tada', 'clemo'),
                    'wobble' => __('wobble', 'clemo'),
                    'jello' => __('jello', 'clemo'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Bouncing Effects', 'clemo'),
                ),
                'choices' => array(
                    'bounceIn' => __('bounceIn', 'clemo'),
                    'bounceInDown' => __('bounceInDown', 'clemo'),
                    'bounceInLeft' => __('bounceInLeft', 'clemo'),
                    'bounceInRight' => __('bounceInRight', 'clemo'),
                    'bounceInUp' => __('bounceInUp', 'clemo'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Fading Effects', 'clemo'),
                ),
                'choices' => array(
                    'fadeIn' => __('fadeIn', 'clemo'),
                    'fadeInDown' => __('fadeInDown', 'clemo'),
                    'fadeInLeft' => __('fadeInLeft', 'clemo'),
                    'fadeInRight' => __('fadeInRight', 'clemo'),
                    'fadeInUp' => __('fadeInUp', 'clemo'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Flippers', 'clemo'),
                ),
                'choices' => array(
                    'flip' => __('flip', 'clemo'),
                    'flipInX' => __('flipInX', 'clemo'),
                    'flipInY' => __('flipInY', 'clemo'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Rotating Effect', 'clemo'),
                ),
                'choices' => array(
                    'rotateIn' => __('rotateIn', 'clemo'),
                    'rotateInDownLeft' => __('rotateInDownLeft', 'clemo'),
                    'rotateInDownRight' => __('rotateInDownRight', 'clemo'),
                    'rotateInUpLeft' => __('rotateInUpLeft', 'clemo'),
                    'rotateInUpRight' => __('rotateInUpRight', 'clemo'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Zoom Effect', 'clemo'),
                ),
                'choices' => array(
                    'zoomIn' => __('zoomIn', 'clemo'),
                    'zoomInDown' => __('zoomInDown', 'clemo'),
                    'zoomInLeft' => __('zoomInLeft', 'clemo'),
                    'zoomInRight' => __('zoomInRight', 'clemo'),
                    'zoomInUp' => __('zoomInUp', 'clemo'),
                    'hinge' => __('hinge', 'clemo'),
                    'rollIn' => __('rollIn', 'clemo'),
                ),
            ),
        ),
    ),
    'tablet' => array(
        'label' => __('Responsive Layout for Tablet', 'clemo'),
        'desc' => __('Choose the responsive tablet display for this column', 'clemo'),
        'help' => __('Use this option in order to control how this column behaves on tablets (and devices with the resoution between 768px - 990px). Note that on phones all the columns are 1/1 by default.', 'clemo'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Automatically inherit default layout', 'clemo'),
            'fw-col-sm-2' => __('Make it a 1/6 column', 'clemo'),
            'fw-col-sm-3' => __('Make it a 1/4 column', 'clemo'),
            'fw-col-sm-4' => __('Make it a 1/3 column', 'clemo'),
            'fw-col-sm-6' => __('Make it a 1/2 column', 'clemo'),
            'fw-col-sm-8' => __('Make it a 2/3 column', 'clemo'),
            'fw-col-sm-9' => __('Make it a 3/4 column', 'clemo'),
            'fw-col-sm-12' => __('Make it a 1/1 column', 'clemo'),
        )
    ),
    'offset' => array(
        'label' => __('Layout Offset', 'clemo'),
        'desc' => __('Move columns to the right using .fw-col-md-offset-* classes ', 'clemo'),
        'help' => __('These classes increase the left margin of a column by * columns. For example, .fw-col-md-offset-4 moves .fw-col-md-4 over four columns.', 'clemo'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Nothing', 'clemo'),
            'fw-col-sm-offset-1' => __('moves 1 column', 'clemo'),
            'fw-col-sm-offset-2' => __('moves 2 column', 'clemo'),
            'fw-col-sm-offset-3' => __('moves 3 column', 'clemo'),
            'fw-col-sm-offset-4' => __('moves 4 column', 'clemo'),
            'fw-col-sm-offset-5' => __('moves 5 column', 'clemo'),
            'fw-col-sm-offset-6' => __('moves 6 column', 'clemo'),
        )
    ),
    'class' => array(
        'label' => __('Custom Class', 'clemo'),
        'desc' => __('Enter custom CSS class', 'clemo'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'clemo'),
        'type' => 'text',
        'value' => '',
    ),
);
