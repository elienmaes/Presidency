<?php

function loadFiles()
{
    wp_enqueue_style('main-styles', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;700;900&display=swap');
    wp_enqueue_style('fontawesome', '//kit.fontawesome.com/c7945f03a3.js');

    wp_enqueue_script('main-js', get_theme_file_uri('app.js', null, '1.0', true));
}

add_action('wp_enqueue_scripts', 'loadFiles');
