<?php
/**
 * Template name: HOME Page Template 
 * The template for displaying home pages.
 */

get_header(); ?>
<?php $i=0;$first_post=""; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if($i==0){$first_post=get_permalink();$i++;} ?>
<div class="home-image-container">
	<img src="<?php the_field('home_image'); ?>">
	<div class="container image-text">
		<div class="sixteen columns">
			<h1>Lorem ipsum</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitullamcorper enim, tempus porttitor Lorem ipsum dolor sit amet,consectetur adipiscing elitullam corper enim, 
			tempus porttitor Lorem ipsum dolor sit amet, consectetur adipiscing
 			elitullamcorper enim, tempus 
			porttitor</p>
		</div>
	</div>
</div>
<?php endwhile;endif; ?>
<div class="page_name">
    <div class="container">
      <div class="sixteen columns">
        <h1>SERVICES</h1>
        <a href="<?php echo site_url('/services/')?>"><div class="arrow"></div></a>
      </div>
    </div>
</div>
<div class="service-box">
  <div class="container">
    <div class="sixteen columns">
    <?php $wp_query_faq = new WP_Query(); ?>
    <?php $wp_query_faq->query('post_type=services&posts_per_page=-1&post_status=publish'); ?>
    <?php if ( $wp_query_faq->have_posts() ) : ?>
    <?php /* Start the Loop */ ?>
    <?php while ( $wp_query_faq->have_posts() ) : $wp_query_faq->the_post(); ?>
    <?php $category = get_the_category();$cat_slug =  $category[0]->slug; ?>
      <div class="items">
        <h1><?php the_title();?></h1>
        <div class="icon-container">
          <div class="icon" id="<?php echo $cat_slug; ?>"></div>
          <div class="text-container"><?php the_content();?></div>
        </div>

      </div>
    <?php endwhile;endif; ?>
    </div>
  </div>
</div>
<div class="page_name border-top">
    <div class="container">
      <div class="sixteen columns">
        <h1>LATEST PROJECTS</h1>
        <a href="<?php echo site_url('/projects/')?>"><div class="arrow"></div></a>
      </div>
    </div>
</div>
<div class="project-slider">
	<div id="owl-demo1">
		<?php $wp_query_faq = new WP_Query(); ?>
		<?php $wp_query_faq->query('post_type=projects&post_status=publish&posts_per_page=-1'); ?>
		<?php if ( $wp_query_faq->have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php while ( $wp_query_faq->have_posts() ) : $wp_query_faq->the_post(); ?>
    	<?php $src_image=wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID) ,'full'); ?>
    	<div class="item"><img src="<?php echo $src_image[0] ?>" alt="Owl Image" class="grayscale fade"></div>
		<?php endwhile;endif; ?>
 	</div>
</div>
<div class="page_name">
    <div class="container">
      <div class="sixteen columns">
        <h1>NEWS</h1>
        <a href="<?php echo site_url('/industry-news/')?>"><div class="arrow"></div></a>
      </div>
    </div>
</div>
<div class="news-slider">
	<div class="container">
			<div id="owl-demo2">
				<?php $wp_query_faq = new WP_Query(); ?>
				<?php $wp_query_faq->query('post_type=post&post_status=publish&posts_per_page=-1'); ?>
				<?php if ( $wp_query_faq->have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( $wp_query_faq->have_posts() ) : $wp_query_faq->the_post(); ?>
		    	<?php $src_image=wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID) ,'full'); ?>
		    	<div class="item">
		    		<div class="four columns">
		    			<div class="home-blog-title"><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?> "><h1><?php the_title();?></h1></a></div>
		    			<div class="home-blog-author"><span>By</span><span><?php the_author(); ?></span></div>
					 	<div class="home-blog-date"><?php echo get_the_date();?></div>
					 	<div class="home-blog-excerpt"><?php the_excerpt_max_charlength(160);?></div>
					 	<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="home-readmore">Keep Reading</a>
		    		</div>
		    		<div class="twelve columns">
		    			<div class="image-container"><img src="<?php echo $src_image[0] ?>" alt="Owl Image" class="grayscale fade"></div>
		    		</div>
		    	</div>
				<?php endwhile;endif; ?>
		 	</div>

 	</div>
</div>
<div class="page_name">
    <div class="container"><div class="sixteen columns"><h1>PARTNERS</h1></div></div>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container">
	<div class="sixteen columns">
		<div id="owl-demo">
		<?php $rows = get_field('partners'); ?>
		<?php if($rows) { ?>
			<?php foreach($rows as $row){ ?>
        		<div class="item"><img src="<?php echo $row['partner_logo'] ?>" alt="Owl Image"></div>
        	<?php } ?>
  		<?php } ?>
 		</div>
	</div>
</div>
<div id="map"></div>
<div class="container">
  <div class="sixteen columns">
    <h1 class="home-contact-title"><?php echo get_field('contact_title'); ?></h1>
    <p class="home-contact-text"><?php echo get_field('contact_text'); ?></p>
    <a href="<?php echo site_url('/contact/') ?>" class="home-contact-readmore">Get in touch</a>
  </div>
</div>
<?php endwhile;endif; ?>
<script type='text/javascript'>
	/* <![CDATA[ */
	var fangohr_dynload = {"postType":"post","startPage":"1","maxPages":"<?php echo $wp_query->max_num_pages;;?>","nextLink":"<?php echo get_vogaye_next_link(get_next_posts_link( ''));?>","startPostPage":"1","nextPostPageLink":"<?php echo $first_post?>"};
	/* ]]> */
</script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
                     
                  var position     = [25.28100,51.53991];
                  var marker_url   = "<?php echo IMAGES?>/marker.png";
                  var marker_w     = 169;
                  var marker_h     = 206;
                  var marker_title = "Mapped WordPress Theme Demo";

                  window.onload = mp_initialize_map(position, marker_url,marker_w,marker_h,marker_title);

              }); 
          function mp_initialize_map (mp_position, mp_marker_url, mp_marker_w, mp_marker_h, mp_marker_title) {

            // fornisce latitudine e longitudine
            var latlng = new google.maps.LatLng(mp_position[0],mp_position[1]);
            var marker = new google.maps.MarkerImage(mp_marker_url, new google.maps.Size(mp_marker_w,mp_marker_h), new google.maps.Point(0,0) );

            // imposta le opzioni di visualizzazione
            var options = {
                  zoom: 16,
                  center: latlng,
                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                  panControl: true,
                  zoomControl: true,
                  mapTypeControl: true,
                  scaleControl: true,
                  streetViewControl: true,
                  overviewMapControl: true,
                  scrollwheel: false
            };
                 
            // crea l'oggetto mappa
            var map = new google.maps.Map(document.getElementById('map'), options);

            var marker = new google.maps.Marker({
                  position: latlng,
                  map: map,
                  icon: marker, 
                  title: mp_marker_title + " - Click for more informations"
            });

            var bew = [
                  {
                        featureType: "all",
                        stylers: [
                               { saturation: -100 }
                        ]
                  }
            ];

            map.setOptions({styles: bew});

            // Marker click event
            google.maps.event.addListener(marker, 'click', function() {
                  $('.content-wrap').toggleClass('table , none');
            })

            // Content click event
            $('.content').click(function(){
                  $('.content-wrap').toggleClass('none , table');
            })

      }
	</script>
<?php get_footer();?>