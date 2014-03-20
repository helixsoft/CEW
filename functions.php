<?php
/*****************************************************************************/
/*Define Constants*/
/*****************************************************************************/

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES',THEMEROOT. '/images');
function CEW_setup() {
	/*
	 * Makes voyage available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Thirteen, use a find and
	 * replace to change 'twentythirteen' to the name of your theme in all
	 * template files.
	 */
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats
	 */

	register_nav_menu( 'primary', __( 'Navigation Menu', 'CEW' ) );
	register_nav_menu( 'top-nav', __( 'Top Menu', 'CEW' ) );
	register_nav_menu( 'footer-nav', __( 'Footer Menu', 'CEW' ) );
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'CEW_setup' );

function get_vogaye_next_link($html){
	preg_match('/<a href="(.+)" >/', $html, $match);
	if(isset($match[1])){
		$url=$match[1];
		return $url;
	}
}
function custom_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '...';
	} else {
		echo $excerpt;
	}
}
if ( ! function_exists( 'CEW_post_nav' ) ) :
/**
 * Displays navigation to next/previous post when applicable.
*/
function CEW_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
    <div class="nav-previous">
        <?php previous_post_link( '%link', _x('Previous Post','test1','VoyageTravel' ) ); ?>
    </div>
    <div class="nav-next">
        <?php next_post_link( '%link', _x( 'Next Post','test2','VoyageTravel' ) ); ?>
    </div> 
	<?php
}
endif;