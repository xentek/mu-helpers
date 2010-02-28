<?php
/*
Plugin Name: WordPress MU Helpers
Plugin URI: http://xentek.net/
Description: Helper functions to make developing solutions with WordPress MU or BuddyPress easier…
Version: 0.7
Author: Eric Marden
Author URI: http://xentek.net/ 
*/

/**
 * Returns a sorted array of all posts across all blogs on the MU install
 *
 * @param int $num_per_blog The number of posts per blog to return
 * @param string $orderby The column to sort on. Uses the same {@link http://codex.wordpress.org/Template_Tags/query_posts#Orderby_Parameters Order By Paramaters as query_posts}
 * @param string $sort The field in the post object to be used in the quicksort
 * @return array Sorted array of posts
 */
function get_all_blog_posts( $num_per_blog = 1, $orderby = 'date', $sort = 'post_date_gmt' )
{
	$posts = array();
	$blogs = get_blog_list( 0,'all' );
	foreach ( $blogs as $blog ):
		switch_to_blog($blog['blog_id']);
			$posts = array_merge( $posts, get_posts('orderby='.$orderby.'&numberposts='.$num_per_blog) );
		restore_current_blog();
	endforeach;
	
	return _quicksort( $posts, $sort );
}

/**
 * Returns a sorted array of all comments across all blogs on the MU install
 *
 * @param int $num_per_blog The number of posts per blog to return
 * @param string $orderby The column to sort on. Uses the same {@link http://codex.wordpress.org/Function_Reference/get_comments#Parameters Order By Paramaters as get_comments}
 * @param string $sort The field in the comment object to be used in the quicksort
 * @return array Sorted array of posts
 */
function get_all_blog_comments( $num_per_blog = 1, $orderby = 'comment_date_gmt', $sort = 'comment_date_gmt' )
{
	$comments = array();
	$blogs = get_blog_list( 0, 'all' );
	foreach ( $blogs as $blog ):
		switch_to_blog($blog['blog_id']);
			$comments = array_merge( $comments, get_comments('orderby='.$orderby.'&number='.$num_per_blog) );
		restore_current_blog();
	endforeach;
	
	return _quicksort( $comments, $sort );
}

function _quicksort( $seq, $sort )
{
	if( !count($seq) ) return $seq;
	
	$k = $seq[0];
	$x = $y = array();
	
	for ($i=1; $i < count($seq); $i++):
		if ( strtotime( $seq[$i]->$sort ) >= strtotime( $k->$sort ) ):
			$x[] = $seq[$i];
		else:
			$y[] = $seq[$i];
		endif;
	endfor;
	
	return array_merge( _quicksort($x, $sort), array($k), _quicksort($y, $sort) );
}


?>