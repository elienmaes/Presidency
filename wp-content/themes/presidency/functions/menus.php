<?php

function registerMenuLocations()
{
    register_nav_menus(array(
        'Header-nav' => 'Header Menu',
        'Footer-nav' => 'Footer Menu',
    ));
}

add_action('init', 'registerMenuLocations');
