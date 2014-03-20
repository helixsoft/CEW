<?php
/**
 * Template name: ABOUT Page Template 
 * The template for displaying contact pages.
 */

get_header(); ?>
<?php $i=0;$first_post=""; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if($i==0){$first_post=get_permalink();$i++;} ?>
<div class="page_name">
    <div class="container"><div class="sixteen columns"><h1><?php the_title();?></h1></div></div>
</div>
<section>
	<div class="container">
		<div class="sixteen columns">
			<h6 class="about-cew-title"><?php echo get_field('about_cew_title') ;?></h6>
			<div class="about-cew-desc"><?php the_content()?></div>
			<a class="button" href="<?php echo site_url('/contact/')?>">Contact us</a>
			<hr/>
			<h6 class="about-cew-division-title">Our Divisions</h6>
			<nav class="about">
				<?php $rows = get_field('our_divisions'); ?>
				<?php if($rows) { ?>
					<?php foreach($rows as $row){ ?>
						<li><span></span><a href="<?php echo $row['our_divisions_link'] ?>" title="<?php echo $row['our_divisions_text'] ?>"><?php echo $row['our_divisions_text'] ?></a></li>
					<?php } ?>
				<?php } ?>
			</nav>
		</div>
	</div>
	<div class="page_mid_name">
    	<div class="container"><div class="sixteen columns"><h1>CERTIFICATION, LICENSE AND ACKOWLEDGEMENTS</h1></div></div>
	</div>
	<div class="container">
		<div class="sixteen columns certifi">
			<?php $rows = get_field('certification'); ?>
			<?php if($rows) { $k=0;?>
				<?php foreach($rows as $row){ ?>
				<div class="four columns item alpha omega">
					<?php if($k<2) { ?>
					<h1 class="line"><?php echo $row['certification_title']; ?></h1>
					<?php }else{ ?>
					<h1><?php echo $row['certification_title']; ?></h1>
					<?php } ?>
					<p><?php echo $row['certification_text']; ?></p>
				</div>
				<?php $k++;} ?>
			<?php } ?>
		</div>
	</div>
</section>
<?php endwhile;endif; ?>					
<script type='text/javascript'>
	/* <![CDATA[ */
	var fangohr_dynload = {"postType":"post","startPage":"1","maxPages":"<?php echo $wp_query->max_num_pages;;?>","nextLink":"<?php echo get_vogaye_next_link(get_next_posts_link( ''));?>","startPostPage":"1","nextPostPageLink":"<?php echo $first_post?>"};
	/* ]]> */
</script>
<?php get_footer();?>
