<?php
function load_project_fonts()
{
    wp_enqueue_style(
        'project-fonts',
        get_template_directory_uri() . '/assets/css/fonts.css',
    );
}
add_action('wp_enqueue_scripts', 'load_project_fonts');

function load_project_js()
{
    wp_enqueue_script(
        'team-member-toggle',
        get_template_directory_uri() . '/js/toggle.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'load_project_js');
