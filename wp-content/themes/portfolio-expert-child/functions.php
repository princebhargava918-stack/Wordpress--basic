<?php
/**
 * Portfolio Expert Child theme functions and definitions
 */

function portfolio_expert_child_enqueue_styles()
{
    wp_enqueue_style('portfolio-expert-parent-style', get_template_directory_uri() . '/style.css');

    // Slick Carousel CSS
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');

    // Custom Slider CSS
    wp_enqueue_style('portfolio-expert-slider-custom', get_stylesheet_directory_uri() . '/assets/css/slider-custom.css', array('slick-css'), '1.0.0');

    // Slick Carousel JS
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);

    // Custom Slider Init JS
    wp_enqueue_script('portfolio-expert-slider-init', get_stylesheet_directory_uri() . '/assets/js/slider-init.js', array('jquery', 'slick-js'), '1.0.0', true);
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

/**
 * jQuery Slider Shortcode
 */
function portfolio_expert_jquery_slider_shortcode($atts)
{
    $atts = shortcode_atts(array(
        'count' => 3,
    ), $atts, 'jquery_slider');

    // Using placeholder images for demonstration
    $slides = array(
        array(
            'image' => 'https://picsum.photos/id/10/1200/400',
            'title' => 'Welcome to Our Portfolio',
            'text' => 'We create stunning digital experiences that captivate and engage.'
        ),
        array(
            'image' => 'https://picsum.photos/id/20/1200/400',
            'title' => 'Creative Design Solutions',
            'text' => 'Transforming ideas into visually striking realities with modern aesthetics.'
        ),
        array(
            'image' => 'https://picsum.photos/id/30/1200/400',
            'title' => 'Build Your Future',
            'text' => 'Empowering businesses with cutting-edge technology and innovative strategies.'
        )
    );

    ob_start();
    ?>
        <div class="custom-jquery-slider-wrapper">
            <div class="custom-jquery-slider">
                <?php foreach ($slides as $slide): ?>
                        <div class="slider-item">
                            <img src="<?php echo esc_url($slide['image']); ?>" alt="<?php echo esc_attr($slide['title']); ?>">
                            <div class="slider-caption">
                                <div class="container">
                                    <h2><?php echo esc_html($slide['title']); ?></h2>
                                    <p><?php echo esc_html($slide['text']); ?></p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        return ob_get_clean();
}
add_shortcode('jquery_slider', 'portfolio_expert_jquery_slider_shortcode');
