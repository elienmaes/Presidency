<?php

require_once locate_template('functions/files.php');
require_once locate_template('functions/menus.php');
require_once locate_template('functions/images.php');
require_once locate_template('functions/support.php');

function registerWidgets()
{
    register_sidebar(array(
        'name' => __('Footer Area', 'footer-form'),
        'id' => 'footer-form',
        'description' => __('Description', 'footer-form'),
        'before_widget' => '<li class="footer-form">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'registerWidgets');

function loadTextDomain()
{
    load_theme_textdomain('presidency', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'loadTextDomain');
