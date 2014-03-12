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
jQuery(document).ready(function($) {

	var postType = fangohr_dynload.postType;
	var pageNum = parseInt(fangohr_dynload.startPage) + 1;
	var postPageNum = parseInt(fangohr_dynload.startPostPage) + 1;
	var max = parseInt(fangohr_dynload.maxPages);
	var nextLink = fangohr_dynload.nextLink;
	var nextPostPageLink = fangohr_dynload.nextPostPageLink
	var maxPostPage = $('#continue_post').addClass('continue_post_' + postPageNum ).attr('data-maxPages') ;
	if (!nextLink) {
		$('#view_more_posts').addClass('hidden');
	}
	$('#view_more_posts').click(function() {
		// Are there more posts to load?
		if(pageNum <= max) {
		
			// Show that we're working.
			$(this).text('Loading...');
			
			$('.more_posts_'+ pageNum).load(nextLink + ' .post',
				function() {
					// Update page number and nextLink.
					$('.more_posts_'+ pageNum).addClass('animate');
					pageNum++;
					nextLink = nextLink.replace(/\/page\/[0-9]?/, '/page/'+ pageNum);
					// Add a new placeholder, for when user clicks again.
					$('section')
						.append('<div class="more_posts_'+ pageNum +'"></div>')
					
					// Update the button message.
					if(pageNum <= max) {
						$('#view_more_posts').text('+');
					} else {
						$('#view_more_posts').text('No More Post');
					}
				}
			);
		} else {
			$('#view_more_posts').text('No More Post');
		}	
		
		return false;
	});
});