<?php

function addTitleTag()
{
    add_theme_support('title-tag');
}


function addCustomLogo()
{
    add_theme_support('custom-logo', array(
        'height' => 200,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
        'unlink-homepage-logo' => false,
    ));
}

function addHTML5()
{
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}

add_action('init', 'addTitleTag');
add_action('after_setup_theme', 'addCustomLogo');
add_action('init', 'addHTML5');
