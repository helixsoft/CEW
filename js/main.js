// On document ready:

$(function(){
	$(window).on('load', function() {
		$('.mix'+'#'+$( ".service-filter" ).find( ".filter.active" ).attr('id')).css('opacity',1);
		$('.mix'+'#'+$( ".service-filter" ).find( ".filter.active" ).attr('id')).children('img').removeClass('grayscale');
		$('.mix'+'#'+$( ".service-filter" ).find( ".filter.active" ).attr('id')).children('.text-container').addClass('active');
	});
	$('.filter').on('click',function(){
		$('.filter-title').html($(this).attr('title'));
		$('.filter').removeClass('active');
		$(this).addClass('active');
		$('.mix').css('opacity',0.6);
		$('.mix').children('img').addClass('grayscale');
		$('.mix'+'#'+$(this).attr('id')).css('opacity',1);
		$('.mix'+'#'+$(this).attr('id')).children('img').removeClass('grayscale');
		$('.mix').children('.text-container').removeClass('active');
		$('.mix'+'#'+$(this).attr('id')).children('.text-container').addClass('active');
	});
});
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
 	  navigation : true,
 	  pagination : false
  });
 	$("#owl-demo1").owlCarousel({
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 	  navigation : false,
 	  pagination : false
  });
 	$("#owl-demo2").owlCarousel({
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 	  navigation : false,
 	  pagination : false,
 	  singleItem : true
  });
});
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
			
			$('.more_posts_'+ pageNum).load(nextLink + ' .'+postType,
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