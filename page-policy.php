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
			<h1 class="cew-policy-title">CEW QUALITY POLICY</h1>
			<p>CEW'S QUALITY POLICY is to make sure that our customers have the satisfaction that all the specific requirements of the contract will be met and thus they feel comfort during the works and for the future. </p>
			<h3 class="cew-policy-achieved">This will be achieved through our approach to:</h3>
			<nav class="cew-policy-nav">
				<ul>
					<li><span></span>Design, engineering and technology</li>
					<li><span></span>Procurement </li>
					<li><span></span>Project management</li>
					<li><span></span>Construction and installation</li>
					<li><span></span>Commissioning</li>
				</ul>
				<ul>
					<li><span></span>Continuous improvement and training</li>
					<li><span></span>Safety</li>
					<li><span></span>Environmental considerations</li>
					<li><span></span>Quality, commitment and value</li>
				</ul>
			</nav>
		</div>
	</div>
	<hr/>
	<div class="container">
		<div class="sixteen columns">
			<h2 class="cew-policy-title">OUR PURPOSE</h2>
			<p>We provide multi-discipline engineering contracting service of :</p>
			<nav class="cew-policy-nav-other">
				<ul>
					<li><span></span>Superior quality and value that creates</li>
					<li><span></span>Safe, effective and comfortable living and working environments for people</li>
				</ul>
				<ul>
					<li><span></span>Ideal operating conditions for specialized machinery, equipment and manufacturing Processes</li>
				</ul>
			</nav>
			<p>As a result, our clients will reward us with leadership in income, profit and value creation, allowing our people and the communities in which we live and work to prosper. On the way to achieve our quality targets, our Quality Manual contains the guidelines of the system. We undertake to guarantee that all the employees have the necessary awareness and discipline to comply with the documentation, instructions and procedures established by this system</p>
			<p>The Quality Management System has been designed to allow continuous revision and improvement as required</p>
			<p>We are aware that the QUALITY IMPROVEMENT efforts towards this . Aim are indispensable for success that shall never end, and that we can approximate the Excellency with the contribution of all our employees</p>
		</div>
	</div>
</section>
<?php endwhile;endif; ?>
<?php get_footer();?>