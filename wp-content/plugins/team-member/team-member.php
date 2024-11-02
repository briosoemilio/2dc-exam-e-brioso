<?php
/*
Plugin Name: Team Member
Description: Custom Gutenberg block for 2DC WP Exam.
Version: 1.0
Author: Elmo
*/

function load_team_member_block()
{
    wp_register_script(
        'team-member-block',
        get_site_url() . '/build/index.js', // Adjust the path according to your structure
        array('wp-blocks', 'wp-element', 'wp-editor'),
        null,
        true // Load in the footer
    );

    register_block_type(
        'team-member/team-member-block',
        array('editor_script' => 'team-member-block') // Make sure this matches the script handle
    );
}
add_action('enqueue_block_editor_assets', 'load_team_member_block');


// Load PJ Fonts
function load_project_fonts()
{
    wp_enqueue_style(
        'project-fonts',
        get_site_url() . '/src/assets/css/fonts.css'
    );
}
add_action('wp_enqueue_scripts', 'load_project_fonts');

// Load Custom CSS
function load_custom_css()
{
    wp_enqueue_style(
        'project-css',
        get_site_url() . '/src/components/styles.css'
    );
}
add_action('wp_enqueue_scripts', 'load_custom_css');

function load_custom_js()
{
    wp_enqueue_script(
        'team-member-toggle',
        get_site_url() . '/src/js/toggle.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'load_custom_js');
