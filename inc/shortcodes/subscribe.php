<?php

function subscribe_section_shortcode($atts) {
    // Extract the title attribute with a default value
    $atts = shortcode_atts(
        array(
            'title' => 'Get the best blog stories into your inbox!', // Default title
        ),
        $atts,
        'subscribe_section'
    );

    // Start output buffering
    ob_start();
    ?>
    <section class="subscribe">
        <div class="subscribe_container">
            <?php get_template_part('templates/icons/subscribe', 'circle'); ?>
            <h3 class="subscribe_title"><?php echo esc_html($atts['title']); ?></h3>
            <form class="subscribe_form">
                <div class="subscribe_input-box">
                    <input type="text" class="subscribe_input-box_field" placeholder="Enter your email">
                    <button class="subscribe_input-box_btn">Subscribe</button>
                </div>
                <label class="subscribe_agreement">
                    <input type="checkbox" />
                    I agree to the <a href="<?php echo get_site_url().'/privacy-policy' ?>" target="_blank">Privacy Policy</a>.
                </label>
            </form>
        </div>
    </section>
    <?php
    // Return the buffered content
    return ob_get_clean();
}

// Register the shortcode
add_shortcode('subscribe-section', 'subscribe_section_shortcode');
