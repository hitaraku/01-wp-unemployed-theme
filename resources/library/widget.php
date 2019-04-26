<?php


if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(18) )
// widget
if ( function_exists('register_sidebar') )
register_sidebars(1, array(
    'name' => '1. Sidebar',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));
    register_sidebars(1, array(
    'name' => '2. Google Adsense(PC)',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    ));
    register_sidebars(1, array(
        'name' => '3. Google Adsense(SP)',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
        ));
    register_sidebars(1, array(
        'name' => '4. Google Adsense(AUTO)',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
        ));
                        