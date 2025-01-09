<?php 
	$title = $args['title'] ?? 'Share On Your Network';
	$showTitle = $args['show-title'] ?? false;
	$post_title = $args['post-title'] ?? null;
	$post_url = $args['post-url'] ?? null;
?>

<div class="share-on-social-media">
	<?php if($showTitle):?>
	<span class="share-on-social-media_title"><?php echo $title ?></span>
	<?php endif; ?>
	<ul class="share-on-social-media_buttons" 
			id="share-on-social-media" 
			data-post-title="<?php echo $post_title ?>" 
			data-post-url="<?php echo $post_url ?>"
			>
		<li>
			<a 
				target="_blank" 
				rel="nofollow noopener" 
				href="https://x.com/intent/post?text=<?php echo $post_title ?>&url=<?php echo $post_url ?>" 
				class="share-on-social-media_button"
				>
			<?php get_template_part('templates/icons/twitter', null, array("size" => 24, 'shape' => 'square')); ?>
			</a>
		</li>
		<li>
			<a 				
				target="_blank" 
				rel="nofollow noopener" 
				href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url ?>" 
				class="share-on-social-media_button">
			<?php get_template_part('templates/icons/facebook', null, array("size" => 24, 'shape' => 'square')); ?>
			</a>
		</li>
		<li>
			<a  				
				target="_blank" 
				rel="nofollow noopener"
				href="https://www.linkedin.com/feed/?shareActive=true&shareUrl=<?php echo $post_url ?>"
				class="share-on-social-media_button"
				>
			<?php get_template_part('templates/icons/linkedin', null, array("size" => 24, 'shape' => 'square')); ?>
			</a>
		</li>
		<li>
			<a 
				target="_blank" 
				rel="nofollow noopener"
				href="mailto:?subject=<?php echo $post_title ?>&body=<?php echo $post_title ?>%0A<?php echo $post_url ?>"	
				class="share-on-social-media_button">
			<?php get_template_part('templates/icons/mail', null, array("size" => 24)); ?>
			</a>
		</li>
		<li>
			<span 
				role="button" 
				class="share-on-social-media_button" 
				id="share-copy-link" 
				title="Copy URL" 
				data-post-url="<?php echo $post_url ?>"
				>
			<?php get_template_part('templates/icons/link', null, array("size" => 20)); ?>
			<span class="share-notification">URL Copied</span>
			</span>
		</li>
	</ul>
</div>