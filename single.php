<?php
/**
 * The Template for displaying all single posts.
 *
 */
get_header();?>
<section>
<?php $i=0;$first_post=""; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if($i==0){$first_post=get_permalink();$i++;} ?>
<article <?php post_class('blog'); ?> id="post-<?php the_ID(); ?>">
	<div class="container">
		 <div class="sixteen columns ">
		 	<div class="image-container">
		 		<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
		 	</div>
		 	<div class="blog-title"><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?> "><h1><?php the_title();?></h1></a></div>
		 	<div class="blog-author"><span>By</span><span><?php the_author(); ?></span></div>
		 	<div class="blog-date"><?php echo get_the_date();?></div>
		 	<div class="blog-excerpt"><?php the_content();?></div>
		 </div>
	</div>
</article>
<?php endwhile;endif; ?>
</section>
<script type='text/javascript'>
/* <![CDATA[ */
var fangohr_dynload = {"postType":"post","startPage":"1","maxPages":"<?php echo $wp_query->max_num_pages;;?>","nextLink":"<?php echo get_vogaye_next_link(get_next_posts_link( ''));?>","startPostPage":"1","nextPostPageLink":"<?php echo $first_post?>"};
/* ]]> */
</script>

<?php get_footer();?>