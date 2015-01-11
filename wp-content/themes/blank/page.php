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
	<?php else: ?>
	<div class="headerShadow" style="height: auto; background-color:white; position: relative; z-index:5;">
	<div class="wrapperWrapper">
		<div class="wrapper" style="padding-left: 25px;"> 
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