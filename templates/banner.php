<?php 
$anchor = $args['anchor'] ?? null;
$image_url = $args['image_url'] ?? null;
$category = $args['category'] ?? null;
$author = $args['author'] ?? null;
$publish_date = $args['publish_date'] ?? null; // Corrected this line
?>

<div class="casinotheme_banner<?php if ($image_url) echo ' light' ?>" 
     <?php if ($image_url) echo 'style="background-image: url('.$image_url.')"'; ?>>
    <?php if ($category) { ?>
        <span class="badge"><?php echo $category; ?></span>
    <?php } ?>
    <h1 class="casinotheme_banner_title wrapper">
        <?php if (is_category()) {
            echo single_cat_title('');
        } else if (is_author()) {
            echo get_the_author();
        } else {
            echo get_the_title();
        } ?>
    </h1>
    <?php if ($author || $publish_date) { ?>
        <div class="casinotheme_banner_post-info">
            <?php if ($author): ?>
                <a href="<?php echo $author->url ?>" class="casinotheme_banner_post-info_author">
                    <img src="<?php echo $author->image; ?>" alt="<?php echo $author->name; ?>" />
                    <span class="casinotheme_banner_post-info_author_name"><?php echo $author->name; ?></span>
                </a>
            <?php endif; ?>
            <?php if ($publish_date): ?>
                <div class="casinotheme_banner_post-info_date">
                    <time datetime="<?php echo date('c', $publish_date); ?>">
                        <?php echo date('M j, Y', $publish_date); ?>
                    </time>
                </div>
            <?php endif; ?>
        </div>
    <?php } else {
        if ($anchor) echo '<a href="#' . $anchor . '">';
        get_template_part('templates/icons/arrow', 'down', array("size" => 24));
        if ($anchor) echo '</a>';
    } ?>
</div>
