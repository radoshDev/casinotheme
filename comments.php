<?php
if (post_password_required()) {
    return;
}

if (!comments_open( )) return;

// Display existing comments
?>
<div class="comments-section">
<?php
if (have_comments()) :
    echo '<h4>' . get_comments_number() . ' Comments</h4>';
    echo '<ul class="comments-list">';
    wp_list_comments([
        'style' => 'ul',
        'short_ping' => true,
        'replay_text' => __('Replyyy', 'casinotheme')
    ]);
    echo '</ul>';
else :
    echo '<p>No comments yet. Be the first to comment!</p>';
endif;

// Comment form
comment_form();
?>
</div>