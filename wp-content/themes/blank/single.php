<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php if (has_post_thumbnail()): ?>
	<div class="headerShadow">
		<div id="fullpic">
			<?php the_post_thumbnail(); ?>
			<div class="wrapper" style="height:100%"> 
				<div class="titleWrapper">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	<div class="postAttWrapper" style="box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.5);">
	<?php else: ?>
	<div class="headerShadow" style="height: auto;">
	<div class="wrapperWrapper">
		<div class="wrapper" style="padding-left: 25px;"> 
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="postAttWrapper">
	<?php endif; ?>
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
	</div>
	<div class="wrapperWrapper">
		<div class="wrapper mainContent"> 
			<p><?php the_content(); ?></p>
		</div>
	</div>
	<?php endwhile; endif;?>
</div>
<?php get_footer(); ?>