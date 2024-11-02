<?php
function load_project_fonts()
{
    wp_enqueue_style(
        'project-fonts',
        get_site_url() . 'src/assets/css/fonts.css'
    );
}

add_action('wp_enqueue_scripts', 'load_project_fonts');
