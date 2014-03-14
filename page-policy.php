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
				<div class="cew-value-item">
					<h1>CEW<br/>VALUES</h1>
				</div>
				<div class="cew-value-item">
					<h2>
						<span class="pawn"></span>
						<span class="text">CEW PEOPLE</span>
					</h2>
					<p>We attract and recruit the finest people. Our organization is built by people from within. For this we promote and reward people according to only their performance and nothing else. We know very well that our people will always be our most important asset.</p>
				</div>
				<div class="cew-value-item">
					<h2>
						<span class="queen"></span>
						<span class="text">Leadership</span>
					</h2>
					<p>
						We all have a clear vision of our responsibilities, objectives and goals. We focus our resources to achieve leadership objectives and strategies. We develop the capability to apply our strategies and eliminate organizational barriers.. We are all leaders in our area of responsibility with a deep commitment to obtain leadership results. 
					</p>
				</div>
				<div class="cew-value-item">
					<h2>
						<span class="king"></span>
						<span class="text">Ownership</span>
					</h2>
					<p>
						We all are personally responsible to meet the business requirements, improve our systems and help others improve their effectiveness. We all act like owners treating the Company's assets as our own and behaving with the Company's long term success in mind.
					</p>
				</div>
				<div class="cew-value-item">
					<h2>
						<span class="knight"></span>
						<span class="text">Passion for Wining</span>
					</h2>
					<p>
						We are determined to be the best at doing what matters most. We have a healthy dissatisfaction with the status quo. We have a compelling desire to improve and to win in the marketplace.
					</p>
				</div>
				<div class="cew-value-item">
					<h2>
						<span class="bishop"></span>
						<span class="text">Trust</span>
					</h2>
					<p>
						We respect our CEW colleagues, customers, suppliers, subcontractors and treat them as we want to be treated. We have confidence in each other's capabilities and intentions. We believe that people work best when there is a foundation of trust.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="sixteen columns">
		</div>
	</div>
	<hr/>
	<div class="container">
		<div class="sixteen columns">
		</div>
	</div>
</section>
<?php endwhile;endif; ?>
<?php get_footer();?>