<?php
/**
 * Portfolio Expert Child theme functions and definitions
 */

function portfolio_expert_child_enqueue_styles()
{
    wp_enqueue_style('portfolio-expert-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'portfolio_expert_child_enqueue_styles');

