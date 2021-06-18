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

    register_block_pattern(
        'lizzie-theme-underscore/image-text',
        array(
            'categories'    => ['lizzie'],
            'title'       => __('Column - Image/Text', 'lizzie-theme-underscore'),
            'description' => _x('Column - two - circle image and text', 'lizzie-theme-underscore'),
            'content'     => file_get_contents(get_template_directory() . "/block-patterns/columns-two-image-text.html")
        )
    );

    register_block_pattern(
        'lizzie-theme-underscore/about-w-circle-image',
        array(
            'categories'    => ['lizzie'],
            'title'       => __('About - Header/Body/Circle Image', 'lizzie-theme-underscore'),
            'description' => _x('About with header and circular images', 'lizzie-theme-underscore'),
            'content'     => file_get_contents(get_template_directory() . "/block-patterns/about-w-circle-image.html")
        )
    );

    register_block_pattern(
        'lizzie-theme-underscore/hero-cover',
        array(
            'categories'    => ['lizzie'],
            'title'       => __('Hero Cover - Just Text', 'lizzie-theme-underscore'),
            'description' => _x('Hero images', 'lizzie-theme-underscore'),
            'content'     => file_get_contents(get_template_directory() . "/block-patterns/hero-cover.html")
        )
    );

    register_block_pattern(
        'lizzie-theme-underscore/full-width-colorbar',
        array(
            'categories'    => ['lizzie'],
            'title'       => __('Full Width Color - Just Text!', 'lizzie-theme-underscore'),
            'description' => _x('Full Width', 'lizzie-theme-underscore'),
            'content'     => file_get_contents(get_template_directory() . "/block-patterns/full-width-colorbar.html")
        )
    );

    register_block_pattern(
        'lizzie-theme-underscore/full-width-colorbar-optin-mailchimp',
        array(
            'categories'    => ['lizzie'],
            'title'       => __('Full Width Color - text and opt-in!', 'lizzie-theme-underscore'),
            'description' => _x('Full Width', 'lizzie-theme-underscore'),
            'content'     => file_get_contents(get_template_directory() . "/block-patterns/full-width-colorbar-optin-mailchimp.html")
        )
    );

    register_block_pattern(
        'lizzie-theme-underscore/optin-mailchimp-stack-only',
        array(
            'categories'    => ['lizzie'],
            'title'       => __('Optin Box', 'lizzie-theme-underscore'),
            'description' => _x('Optin', 'lizzie-theme-underscore'),
            'content'     => file_get_contents(get_template_directory() . "/block-patterns/optin-mailchimp.html")
        )
    );

    register_block_pattern(
        'lizzie-theme-underscore/optin-mailchimp-stack',
        array(
            'categories'    => ['lizzie'],
            'title'       => __('Optin Stack', 'lizzie-theme-underscore'),
            'description' => _x('Optin', 'lizzie-theme-underscore'),
            'content'     => file_get_contents(get_template_directory() . "/block-patterns/optin-mailchimp-stack.html")
        )
    );
}


add_action('init', 'lizzie_theme_register_my_patterns');
