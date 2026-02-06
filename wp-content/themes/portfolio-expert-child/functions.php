<?php
/**
 * Portfolio Expert Child theme functions and definitions
 */

function portfolio_expert_child_enqueue_styles()
{
    wp_enqueue_style('portfolio-expert-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'portfolio_expert_child_enqueue_styles');
function portfolio_expert_dummy_toc_shortcode($atts)
{
    $output = '
    <div class="dummy-toc">
        <h3 class="dummy-toc-title">Table of Contents</h3>
        <ul class="dummy-toc-list">
            <li><a href="#section1">Introduction to the Topic</a></li>
            <li><a href="#section2">Key Features and Benefits</a></li>
            <li>
                <a href="#section3">Getting Started Guide</a>
                <ul class="dummy-toc-sublist">
                    <li><a href="#sub-section3-1">Installation Process</a></li>
                    <li><a href="#sub-section3-2">Configuration Steps</a></li>
                </ul>
            </li>
            <li><a href="#section4">Advanced Tips & Tricks</a></li>
            <li><a href="#section5">Conclusion</a></li>
        </ul>
    </div>';

    return $output;
}
add_shortcode('dummy_toc', 'portfolio_expert_dummy_toc_shortcode');
