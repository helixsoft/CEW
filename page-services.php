<?php
/**
 * Template name: SERVICES Page Template 
 * The template for displaying services pages.
 */

get_header(); ?>
<?php $i=0;$first_post=""; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if($i==0){$first_post=get_permalink();$i++;} ?>
<div class="page_name">
    <div class="container"><div class="sixteen columns"><h1><?php the_title();?></h1></div></div>
</div>
<?php endwhile;endif; ?>
<section>
	<div class="container">
		<div class="sixteen columns service-filter">
			<div class="five columns alpha omega">
				<h1>Our Services</h1>
				<h2 class="filter-title">Air conditioning & refrigeration division</h2>				
				<nav class="service-filter">
					<li class="filter active" id="air-conditioning-refrigeration-division" data-filter=".air-conditioning-refrigeration-division" title="Air conditioning &amp; refrigeration division"></li>
					<li class="filter" id="plumbing-sanitary-division" data-filter=".plumbing-sanitary-division" title="Plumbing &amp; sanitary division"></li>
					<li class="filter" id="electrical-division" data-filter=".electrical-division" title="Electrical division"></li>
					<li class="filter" id="security-system-division" data-filter=".security-system-division" title="Security system division"></li>
					<li class="filter" id="fire-alarm-system-fire-fighting-system" data-filter=".fire-alarm-system-fire-fighting-system" title="Fire Alarm System &amp; Fire Fighting system"></li>
					<li class="filter" id="maintenance-division" data-filter=".maintenance-division" title="Maintenance Division"></li>
				</nav>
				<hr/>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile;endif; ?>
			</div>
			<div class="filter-images">
				<div id="service-image">
					<?php $wp_query_faq = new WP_Query(); ?>
					<?php $wp_query_faq->query('post_type=services&posts_per_page=-1&post_status=publish'); ?>
					<?php if ( $wp_query_faq->have_posts() ) : ?>
					<?php /* Start the Loop */ ?>
					<?php while ( $wp_query_faq->have_posts() ) : $wp_query_faq->the_post(); ?>
					<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');?>
					<?php $category = get_the_category();$cat_slug =  $category[0]->slug; ?>
					<div class="mix" id="<?php echo $cat_slug ?>">
						<img src="<?php echo $large_image_url[0]?>" class="grayscale">
						<div class='text-container'>
							<div class="arrow"></div>
							<div class="service-title clearfix">
								<h1><?php the_title()?></h1>
								<div class="icon" id="<?php echo $cat_slug ?>"></div>
							</div>
							<div class="service-excert"><?php the_content();?></div>
						</div>
					</div>
					<?php endwhile;endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="page_mid_name">
    	<div class="container"><div class="sixteen columns"><h1>BRANCHES</h1></div></div>
	</div>
	<div class="container">
		<div class="sixteen columns certifi">
			<div class="four columns item alpha omega">
				<h1 class="line">SHOWROOM</h1>
				<p>Certified by KAHRAMAA as a Grade “A” Electrical contractor, doing all the Electromechanical works. </p>
			</div>
			<div class="four columns item alpha omega">
				<h1 class="line">Q-TEL LICENSE</h1>
				<p>Licensed by Q-tel for dealing in the field of Telecommunication (i.e: DTH, Satellite Dish, Satellite LNB ect…) </p>
			</div>
			<div class="four columns item alpha omega">
				<h1>ALCAD ACKOWLEDGEMENT</h1>
				<p>ALCAD have been ackowledge us as the distributors in Qatar for all ALCAD products such as SMATV and Audio/Video Door Phone system, Central Satellite System etc… </p>
			</div>
			<div class="four columns item alpha omega">
				<h1>CALIBRATION CERTIFICATE</h1>
				<p>Ministry of Environment Central Laboratories Department have been certified us to calibrate the weights for company plants.</p>
			</div>
		</div>
	</div>
</section>
<script type='text/javascript'>
	/* <![CDATA[ */
	var fangohr_dynload = {"postType":"post","startPage":"1","maxPages":"<?php echo $wp_query->max_num_pages;;?>","nextLink":"<?php echo get_vogaye_next_link(get_next_posts_link( ''));?>","startPostPage":"1","nextPostPageLink":"<?php echo $first_post?>"};
	/* ]]> */
</script>
<?php get_footer();?>