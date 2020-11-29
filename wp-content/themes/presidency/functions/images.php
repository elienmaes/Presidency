<?php
function registerThemeSupport()
{
    add_theme_support('post-thumbnails');       //featured images toevoegen aan posts en pages
    add_image_size('hero-image', 1200, 300);    //
}

add_action('init', 'registerThemeSupport');
