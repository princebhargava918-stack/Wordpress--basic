<?php
/**
 * Portfolio Expert Child theme functions and definitions
 */

function portfolio_expert_child_enqueue_styles() {
    $parent_style = 'portfolio-expert-style'; // This is 'portfolio-expert-style' for the Portfolio Expert theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'portfolio_expert_child_enqueue_styles' );
?>
