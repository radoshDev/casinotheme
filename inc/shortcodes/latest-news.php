<?php

function latest_news_shortcode($atts) {
    // Extract shortcode attributes and set default values
    $atts = shortcode_atts(
        array(
            'title'         => 'Our Latest News', // Default subtitle
            'subtitle'      => 'Best of sports',  // Default title
            'category_name' => 'news',           // Default category
        ),
        $atts,
        'latest_news'
    );

    // Build query arguments
    $query_args = array(
        'post_type'      => 'post',
        'posts_per_page' => 4,
        'category_name'  => $atts['category_name'],
        'post_status'    => 'publish',
    );

    // Fetch posts
    $query = new WP_Query($query_args);

    // Start output buffering
    ob_start();

    // Check if posts exist
    if ($query->have_posts()): ?>
        <section class="latest-news wrapper section-block">
            <p class="latest-news_subtitle content-posts_subtitle"><?php echo esc_html($atts['subtitle']); ?></p>
            <h2 class="latest-news_title content-posts_title"><?php echo esc_html($atts['title']); ?></h2>
            
            <div class="latest-news_grid">
                <?php 
                $counter = 0;
                while ($query->have_posts()): $query->the_post();
                    $counter++;
                    get_template_part('templates/post-article-item', null, array(
                        'type'    => 'news',
                        'feature' => $counter == 1
                    ));
                endwhile;
                ?>
            </div>
        </section>
    <?php endif;

    // Reset post data
    wp_reset_postdata();

    // Return output buffer contents
    return ob_get_clean();
}

// Register the shortcode
add_shortcode('latest-news', 'latest_news_shortcode');