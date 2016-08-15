<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();
$options = array(

    'tabs_position_picker' => array(
        'type'  => 'multi-picker',
        'label' => false,
        'desc'  => false,
        'picker' => array(
            'tabs_type' => array(
                'label' => __('Type', 'clemo'),
                'type'  => 'image-picker',
                'value' => '',
                'desc'  => __('Choose the tabs type', 'clemo'),
                'choices' => array(
                    'one' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => clemo_IMAGES .'/image-picker/framed-top.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => clemo_IMAGES .'/image-picker/framed-top.jpg'
                        ),
                    ),
                    'two' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => clemo_IMAGES .'/image-picker/framed-side.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => clemo_IMAGES .'/image-picker/framed-side.jpg'
                        ),
                    ),
                    'three' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => clemo_IMAGES .'/image-picker/minimal-top.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => clemo_IMAGES .'/image-picker/minimal-top.jpg'
                        ),
                    ),
                    'four' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => clemo_IMAGES .'/image-picker/minimal-side.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => clemo_IMAGES .'/image-picker/minimal-side.jpg'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'one' => array(
                'tabs_justified' => array(
                    'type'  => 'switch',
                    'value' => '',
                    'label' => __('', 'clemo'),
                    'desc'  => __('Make tabs justified', 'clemo'),
                    'left-choice' => array(
                        'value' => '',
                        'label' => __('No', 'clemo'),
                    ),
                    'right-choice' => array(
                        'value' => 'nav-justified',
                        'label' => __('Yes', 'clemo'),
                    )
                ),
            ),
            'three' => array(
                'tabs_justified' => array(
                    'type'  => 'switch',
                    'value' => '',
                    'label' => __('', 'clemo'),
                    'desc'  => __('Make tabs justified', 'clemo'),
                    'left-choice' => array(
                        'value' => '',
                        'label' => __('No', 'clemo'),
                    ),
                    'right-choice' => array(
                        'value' => 'nav-justified',
                        'label' => __('Yes', 'clemo'),
                    )
                ),
            )
        )
    ),
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Tabs', 'clemo' ),
		'popup-title'   => __( 'Add/Edit Tab', 'clemo' ),
		'desc'          => __( 'Add tabs', 'clemo' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
            'tab_title' => array(
                'type' => 'group',
                'options' => array(
                    'tab_title'   => array(
                        'type'  => 'text',
                        'label' => __('Title', 'clemo'),
                        'desc' => __('Enter tab title', 'clemo')
                    ),
                    'tab_icon' => array(
                        'type' => 'icon',
                        'label' => __( 'Icon', 'clemo' ),
                        'desc' => __( 'Choose tab icon', 'clemo' )
                    ),
                )
            ),
            'content' => array(
                'type' => 'group',
                'options' => array(
                    'tab_content_title'   => array(
                        'type'  => 'text',
                        'label' => __('Content Title', 'clemo'),
                        'desc' => __('Enter content title', 'clemo')
                    ),
                    'tab_content' => array(
                        'type'   => 'wp-editor',
                        'teeny'  => true,
                        'reinit' => true,
                        'label' => __('Tab Content', 'clemo'),
                        'desc' => __('Enter tab content', 'clemo')
                    )
                )
            )

		)
	),
    'class'  => array(
        'attr'  => array( 'class' => 'border-bottom-none'),
        'label'   => __( 'Custom Class', 'clemo' ),
        'desc'    => __( 'Enter custom CSS class', 'clemo' ),
        'type'    => 'text',
        'help' => __('You can use this class to further style this shortcode by adding your custom CSS in the <strong>style.css</strong> file. This file is located on your server in the <strong>child-theme</strong> folder.','clemo'),
        'value' => '',
    ),
);