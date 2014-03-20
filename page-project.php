<?php
/**
 * Template name: PROJECTS Page Template 
 * The template for displaying project pages.
 */

get_header(); ?>
<div class="page_name">
    <div class="container"><div class="sixteen columns"><h1>Projects</h1></div></div>
</div>
<?php $i=0;$first_post="";?>
<?php $wp_query_faq = new WP_Query(); ?>
<?php $wp_query_faq->query('post_type=projects&post_status=publish'.'&paged='.get_query_var( 'paged' )); ?>
<?php if ( $wp_query_faq->have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while ( $wp_query_faq->have_posts() ) : $wp_query_faq->the_post(); ?>
<?php if($i==0){$first_post=get_permalink();} $i++;?>
<article <?php post_class('project'); ?> id="post-<?php the_ID(); ?>">
	<div class="container">
		<div class="sixteen columns">
			<div class="six columns alpha omega padding-top">
				<h6>Project</h6>
				<p><?php the_title();?></p>
				<h6>Contractor</h6>
				<p><?php the_field('contractor'); ?></p>
				<h6>Client</h6>
				<p><?php the_field('client'); ?></p>
				<h6>Consultant</h6>
				<p><?php the_field('consultant'); ?></p>
				<h6>Year</h6>
				<p><?php the_field('year'); ?></p>
			</div>
			<div class="ten columns">
				<div class="image-container project">
					<?php $src_image=wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID) ,'full'); ?>
					<img src="<?php echo $src_image[0] ?>" class="grayscale fade">
				</div>
			</div>
		</div>
	</div>
</article>
<?php endwhile;endif; ?>
<div class="more_posts_2 more-post-container"></div>					
<article class="load-more pro">
	<a id='view_more_posts' class='view_more_posts' href="#" onClick="_gaq.push(['_trackEvent', 'Homepage', 'Dynamic Load Posts', 'more posts 2']);"><?php _e('+','Miza')?></a>
	<script type='text/javascript'>
	/* <![CDATA[ */
	var fangohr_dynload = {"postType":"projects","startPage":"1","maxPages":"<?php echo $wp_query_faq->max_num_pages;?>","nextLink":"<?php echo site_url('/projects/page/2/')?>","startPostPage":"1","nextPostPageLink":"<?php echo $first_post?>"};
	/* ]]> */
	</script>
</article>
<?php get_footer();?>
