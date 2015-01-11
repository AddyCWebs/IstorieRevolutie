<?php get_header(); ?>

<div class="wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="postWrapper">
			<div class="postAttWrapper">
				<div class="postAttAutWrapper">
					<div class="postAttAutImg">
					</div>
					<h3>By: <?php the_author() ?></h3>
				</div>
			</div>

			<div class="featImgWrapper">
				<?php if (has_post_thumbnail()) {
					the_post_thumbnail();
				} ?>
			</div>

			<div class="postDescWrapper"></div>
		</div>
	<?php endwhile; endif; ?>
</div>

<?php get_footer() ?>

