<?php
/**
 * The main template file.
 */

get_header();?>
<section>
<?php $i=0;$first_post=""; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if($i==0){$first_post=get_permalink();$i++;} ?>
<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile;endif; ?>
<div class="more_posts_2 more-post-container"></div>
</section>
<article class="load-more">
	<a id='view_more_posts' class='view_more_posts' href="#" onClick="_gaq.push(['_trackEvent', 'Homepage', 'Dynamic Load Posts', 'more posts 2']);"><?php _e('+','Miza')?></a>
	<script type='text/javascript'>
	/* <![CDATA[ */
	var fangohr_dynload = {"postType":"post","startPage":"1","maxPages":"<?php echo $wp_query->max_num_pages;;?>","nextLink":"<?php echo get_vogaye_next_link(get_next_posts_link( ''));?>","startPostPage":"1","nextPostPageLink":"<?php echo $first_post?>"};
	/* ]]> */
	</script>
</article>
<?php get_footer();?>