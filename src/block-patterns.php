<?php

// how to register a crapton of blocks
// https://github.com/WordPress/WordPress/blob/master/wp-includes/block-patterns.php


function lizzie_theme_register_my_patterns()
{

    // register category
    register_block_pattern_category(
        'lizzie',
        array( 'label' => __( 'Lizzie', 'lizzie-theme-underscore' ) )
    );

    register_block_pattern(
        'lizzie-theme-underscore/hero-block',
        array(
            'categories'    => ['lizzie'],
            'title'       => __('Hero Image', 'lizzie-theme-underscore'),
            'description' => _x('A big hero image with a call to action', 'Block pattern description', 'lizzie-theme-underscore'),
            'content'     => file_get_contents(get_template_directory() . "/block-patterns/full-cover.html")
        )
    );

    register_block_pattern(
        'lizzie-theme-underscore/image-text-button',
        array(
            'categories'    => ['lizzie'],
            'title'       => __('Column - Image/Text/Button', 'lizzie-theme-underscore'),
            'description' => _x('A three column approach with image, text, and then a button', 'lizzie-theme-underscore'),
            'content'     => file_get_contents(get_template_directory() . "/block-patterns/columns-image-text-button.html")
        )
    );



}


add_action('init', 'lizzie_theme_register_my_patterns');