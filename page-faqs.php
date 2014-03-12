<?php
/**
 * Template name: FAQ Page Template 
 * The template for displaying faq pages.
 */

get_header(); ?>
<?php $i=0;$first_post=""; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if($i==0){$first_post=get_permalink();$i++;} ?>
<div class="page_name">
    <div class="container"><div class="sixteen columns"><h1><?php the_title();?></h1></div></div>
</div>
<?php endwhile;endif; ?>
<?php $i=0;$first_post="";?>
<?php $wp_query_faq = new WP_Query(); ?>
<?php $wp_query_faq->query('post_type=faqs&posts_per_page=-1&post_status=publish'); ?>
<?php if ( $wp_query_faq->have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while ( $wp_query_faq->have_posts() ) : $wp_query_faq->the_post(); ?>
<?php if($i==0){$first_post=get_permalink();} $i++;?>
<section>
	<article <?php post_class('faq'); ?> id="post-<?php the_ID(); ?>">
	<div class="container">
		 <div class="sixteen columns ">
		 	<div class="faq-title"><h1><span><?php echo $i.'.'?></span><?php the_title();?></h1></a></div>
		 	<div class="faq-excerpt"><?php the_excerpt();?></div>
		 </div>
	</div>
</article>
</section>
<?php endwhile;endif; ?>
<script type='text/javascript'>
	/* <![CDATA[ */
	var fangohr_dynload = {"postType":"post","startPage":"1","maxPages":"<?php echo $wp_query->max_num_pages;;?>","nextLink":"<?php echo get_vogaye_next_link(get_next_posts_link( ''));?>","startPostPage":"1","nextPostPageLink":"<?php echo $first_post?>"};
	/* ]]> */
	</script>
<?php get_footer();?>
