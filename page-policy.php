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
				<?php $rows = get_field('values'); ?>
				<?php if($rows) { ?>
					<?php foreach($rows as $row){ ?>
						<div class="cew-value-item">
							<h2>
								<span class="<?php echo $row['piece'] ?>"></span>
								<span class="text"><?php echo $row['text'] ?></span>
							</h2>
							<p><?php echo $row['description'] ?></p>
						</div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="sixteen columns">
			<h1 class="cew-policy-title"><?php echo get_field('cew_policy_title'); ?></h1>
			<p><?php echo get_field('cew_policy_desc'); ?></p>
			<?php echo get_field('cew_policy_approch'); ?>
		</div>
	</div>
	<hr/>
	<div class="container">
		<div class="sixteen columns">
			<h2 class="cew-policy-title">OUR PURPOSE</h2>
			<?php echo get_field('cew_policy_discipline'); ?>
		</div>
	</div>
</section>
<?php endwhile;endif; ?>
<?php get_footer();?>