<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="headerShadow">
	<?php if (has_post_thumbnail()): ?>
		<div id="fullpic">
			<?php the_post_thumbnail(); ?>
			<div class="wrapper" style="height:100%"> 
				<div class="titleWrapper">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	<?php else: ?>
	<div class="wrapperWrapper">
		<div class="wrapper"> 
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<?php endif; ?>
	</div>
	<div class="wrapperWrapper">
		<div class="wrapper mainContent"> 
			<p><?php the_content(); ?></p>
		</div>
	</div>
	<?php endwhile; endif;?>
</div>
<?php get_footer(); ?>