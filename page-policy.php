<?php
/**
 * Template name: POLICY Page Template 
 * The template for displaying Policy pages.
 */

get_header(); ?>
<?php $i=0;$first_post=""; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if($i==0){$first_post=get_permalink();$i++;} ?>
<div class="page_name">
    <div class="container"><div class="sixteen columns"><h1><?php the_title();?></h1></div></div>
</div>
<section>
	<div class="cew-value">
		<div class="container">
			<div class="sixteen columns">
				<div class="cew-value-item"></div>
				<div class="cew-value-item"></div>
				<div class="cew-value-item"></div>
				<div class="cew-value-item"></div>
				<div class="cew-value-item"></div>
				<div class="cew-value-item"></div>
			</div>
		</div>
	</div>
</section>
<?php endwhile;endif; ?>
<?php get_footer();?>