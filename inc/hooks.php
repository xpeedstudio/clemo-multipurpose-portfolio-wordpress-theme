<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Theme’s filters and actions
 */
/*
 * Widget register
 */
if (!function_exists('clemo_widget_init')) {

    function clemo_widget_init() {
        if (function_exists('register_sidebar')) {
            register_sidebar(
                    array(
                        'name' => __('Blog Widget Area', 'clemo'),
                        'id' => 'sidebar-1',
                        'description' => __('Appears on posts and pages.', 'clemo'),
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget' => '</div> <!-- end widget -->',
                        'before_title' => '<h5 class="widget-title">',
                        'after_title' => '</h5>',
                    )
            );
        }
    }

    add_action('widgets_init', 'clemo_widget_init');
}



/*
 * TGM REQUIRE PLUGIN
 * require or recommend plugins for your WordPress themes
 */

/** @internal */
function _action_theme_register_required_plugins() {
    tgmpa(array(
        array(
            'name' => 'clemo',
            'slug' => 'clemo',
            'required' => true,
        ),
    ));
}

add_action('tgmpa_register', '_action_theme_register_required_plugins');

// Mega menu filter.

function _filter_mega_menu_wp_nav_menu_objects($sorted_menu_items, $args) {
    $frontpage_ID = clemo_main(get_option('page_on_front'), false);
    $home = (clemo_main(get_the_ID(), false) == $frontpage_ID) ? true : false;
    $mega_menu = array();
    $prefx = ($home != true) ? esc_url(home_url('/#')) : '#';

    foreach ($sorted_menu_items as $item) {
        if (clemo_get_post_meta(clemo_main($item->object_id, false), 'hide_title_from_menu') == 'yes') {
            $item->classes[] = 'hidden cross-fire';
        }

        $section = clemo_get_post_meta(clemo_main($item->object_id, false), 'xs_page_section');

        if (in_array('menu-item-has-children', $item->classes)) {

            $item->url = '#';
        } else {
            if ($section == 'on') {
                $item->url = esc_url($prefx . clemo_sectionID(clemo_main($item->object_id, false)));
            }
        }
    }


    return $sorted_menu_items;
}

add_filter('wp_nav_menu_objects', '_filter_mega_menu_wp_nav_menu_objects', 10, 2);



/*
 * TGM REQUIRE PLUGIN
 * require or recommend plugins for your WordPress themes
 */

/** @internal */
function _action_clemo_register_required_plugins() {

    $plugin_dir = CLEMO_THEMEROOT_DIR . '/inc/includes/plugins';

    $plugins = array(
        array(
            'name' => 'Unyson',
            'slug' => 'unyson',
            'required' => true,
            'source' => $plugin_dir . '/unyson.zip',
        ),
        array(
            'name' => 'WD Instagram Feed',
            'slug' => 'wd-instagram-feed',
            'required' => true,
            'external_url' => 'https://wordpress.org/plugins/wd-instagram-feed/',
        ),
    );


    $config = array(
        'id' => 'clemo', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '', // Default absolute path to bundled plugins.
        'menu' => 'clemo-install-plugins', // Menu slug.
        'parent_slug' => 'themes.php', // Parent menu slug.
        'capability' => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices' => true, // Show admin notices or not.
        'dismissable' => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true, // Automatically activate plugins after installation or not.
        'message' => '', // Message to output right before the plugins table.
    );

    clemopa($plugins, $config);
}

add_action('clemopa_register', '_action_clemo_register_required_plugins');


if (!function_exists('clemo_action_xs_admin_scripts')) :

    function clemo_action_xs_admin_scripts() {
        wp_enqueue_style('xs-admin', CLEMO_CSS . '/xs_admin.css', null, CLEMO_VERSION);
    }

    add_action('admin_enqueue_scripts', 'clemo_action_xs_admin_scripts');

endif;