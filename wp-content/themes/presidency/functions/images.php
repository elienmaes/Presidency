<?php
function registerThemeSupport()
{
    add_theme_support('post-thumbnails');
    add_image_size('large-thumbnail', 300, 300);
}

add_action('init', 'registerThemeSupport');
