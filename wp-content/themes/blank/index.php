<?php if (is_front_page()) : get_header('mainheader'); else : get_header(); endif; ?>
<div class="wrapperWrapper"><div class="wrapper">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="postWrapper">
		<h2><?php the_title() ?></h2>
		<div class="postAttWrapper">
			<div class="postAttAutWrapper">
			<div class="postAttAutImg">
			</div>
			<h3><?php the_author() ?></h3>
		</div>
		<div class="postAttTagWrapper">
			<div class="postAttTagImg">
			</div>
			<h3><?php
					$posttags = get_the_tags();
					if ($posttags) {
  						foreach($posttags as $tag) {
    						echo $tag->name . ', ';
  						}
					} else {
						echo 'istorie,';
					}
				?></h3>
		</div>
		<div class="postAttDatWrapper">
			<div class="postAttDatImg">
			</div>
			<h3><?php the_date('d M Y', '<h3>', '</h3>'); ?></h3>
		</div>
		</div>

		<?php if (has_post_thumbnail()): ?>
			<div class="featImgWrapper">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
			<div class="postDescWrapper">
				<p><?php the_excerpt() ?>
			</div>
			<span class="button">Citeste</span>
		</div>
		<hr> <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div></div>
<?php get_footer() ?>

