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
				<h2>Air Cpmditioning & refrigeration division</h2>
				<?php $categories = get_categories(); ?> 
				<nav class="service-filter">
				<?php foreach ($categories as $category) { ?>
					<?php if ($category->cat_name != 'Uncategorized') { ?>
					<li class="filter" id="<?php echo $category->slug?>" data-filter=".<?php echo $category->slug?>" title="<?php echo $category->cat_name;?>"></li>
					<?php } ?>
				<?php } ?>
				</nav>
			</div>
			<div class="eleven columns alpha omega">
				<div id="service-image">
					<div class="mix web">1</div>
					<div class="mix cat">2</div>
					<div class="mix cat">1</div>
					<div class="mix web">2</div>
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
