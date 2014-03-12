<article <?php post_class('blog'); ?> id="post-<?php the_ID(); ?>">
	<div class="container">
		 <div class="sixteen columns ">
		 	<div class="image-container">
		 		<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
		 	</div>
		 	<div class="blog-title"><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?> "><h1><?php the_title();?></h1></a></div>
		 	<div class="blog-author"><span>By</span><span><?php the_author(); ?></span></div>
		 	<div class="blog-date"><?php echo get_the_date();?></div>
		 	<div class="blog-excerpt"><?php the_excerpt();?></div>
		 	<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="readmore">Keep Reading</a>
		 </div>
	</div>
</article>