<?php
/**
 * Template name: PROJECTS Page Template 
 * The template for displaying project pages.
 */

get_header(); ?>
<div class="page_name">
    <div class="container"><div class="sixteen columns"><h1>Projects</h1></div></div>
</div>
<?php $i=0;$first_post=""; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if($i==0){$first_post=get_permalink();$i++;} ?>

<?php endwhile;endif; ?>					
<script type='text/javascript'>
	/* <![CDATA[ */
	var fangohr_dynload = {"postType":"post","startPage":"1","maxPages":"<?php echo $wp_query->max_num_pages;;?>","nextLink":"<?php echo get_vogaye_next_link(get_next_posts_link( ''));?>","startPostPage":"1","nextPostPageLink":"<?php echo $first_post?>"};
	/* ]]> */
</script>
<?php get_footer();?>
