<?php if (is_front_page()) : get_header('mainheader'); else : get_header(); endif; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php if (has_post_thumbnail()): ?>
		<div class="fullpic"><?php the_post_thumbnail(); ?>
	<?php endif ?>
		<h1><?php the_title(); ?></h1></div>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<script>
	var img = document.getElementsByClassName('attachment-post-thumbnail');

	for(i = 0; i < img.length; i++) {
		if(img[i].width/window.innerWidth < img[i].height/(window.innerHeight*75/100))
			img[i].style.maxWidth = '100%';
		else
			img[i].style.maxHeight = '100%';
	}
</script>
<div id="delimiter">
</div>
<?php get_footer(); ?>