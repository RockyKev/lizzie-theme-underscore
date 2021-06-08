<?php

// how to register a crapton of blocks
// https://github.com/WordPress/WordPress/blob/master/wp-includes/block-patterns.php


function lizzie_theme_register_my_patterns()
{
    register_block_pattern(
        'lizzie-theme-underscore/my-awesome-pattern',
        array(
            'title'       => __('Hero Image', 'lizzie-theme-underscore'),
            'description' => _x('A big hero image with a call to action', 'Block pattern description', 'lizzie-theme-underscore'),
            'content'     => file_get_contents(get_template_directory() . "/block-patterns/full-cover.html")
        )
    );
}


add_action('init', 'lizzie_theme_register_my_patterns');
