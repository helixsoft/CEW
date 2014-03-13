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
			<h6 class="about-cew-title">Commitment Engineering Works.</h6>
			<div class="about-cew-desc"><?php the_content()?></div>
			<a class="button" href="<?php echo site_url('/contact/')?>">Contact us</a>
			<hr/>
			<h6 class="about-cew-division-title">Our Divisions</h6>
			<nav class="about">
				<li><span></span><a href="#">MEP Division</a></li>
				<li><span></span><a href="#">Instrumentation & Industrial Maintenance Division</a></li>
			</nav>
		</div>
	</div>
	<div class="page_mid_name">
    	<div class="container"><div class="sixteen columns"><h1>CERTIFICATION, LICENSE AND ACKOWLEDGEMENTS</h1></div></div>
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
				<p>Ministry of Environment Central Laboratories Department have been certified us to calibrate the weights for company plants.</p>
			</div>
			<div class="four columns item alpha omega">
				<h1>CALIBRATION CERTIFICATE</h1>
				<p>ALCAD have been ackowledge us as the distributors in Qatar for all ALCAD products such as SMATV and Audio/Video Door Phone system, Central Satellite System etc… </p>
			</div>
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
