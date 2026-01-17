<li class="c-column__item">
	<a href="<?php the_permalink(); ?>" class="c-column__link">
		<figure class="c-column__thumb">
			<?php if (has_post_thumbnail()) : ?>
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" width="214" height="142" alt="サムネイル" loading="lazy">
			<?php else : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/thumbnail.jpg" alt="代替画像">
			<?php endif; ?>
		</figure>
		<div class="c-column__txtbox">
			<h3 class="c-column__item-ttl"><?php the_title(); ?></h3>
			<p class="c-column__txt"><?php echo esc_html( get_the_excerpt() ); ?></p>
		</div>
	</a>
</li>