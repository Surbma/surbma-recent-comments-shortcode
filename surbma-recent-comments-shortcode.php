<?php

/*
Plugin Name: Surbma - Recent Comments Shortcode
Plugin URI: http://surbma.com/wordpress-plugins/
Description: A simple shortcode to display recent comments.

Version: 1.1.0

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-recent-comments-shortcode
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

// Localization
function surbma_recent_comments_shortcode_init() {
	load_plugin_textdomain( 'surbma-recent-comments-shortcode', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'surbma_recent_comments_shortcode_init' );

function surbma_recent_comments_shortcode_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'author__not_in' => '',
		'number' => '5',
		'order' => 'DESC',
		'author' => 'show',
		'title' => 'show',
		'excerpt' => 'show',
		'morelink' => 'Read the post »'
	), $atts ) );

	$args = array(
		'author__not_in' => $author__not_in,
		'number' => $number,
		'order' => $order,
		'status' => 'approve'
	);

	$comments = get_comments( $args );

	$content = '';

	$content .= '<ul class="surbma-recent-comments">';
	foreach( $comments as $comment ) {
		$content .= '<li class="surbma-recent-comment">';
		if ( $author == 'show' ) {
			$content .= '<span class="surbma-recent-comment-author">' . $comment->comment_author . ' - </span>';
		}
		if ( $title == 'show' ) {
			$content .= '<a class="surbma-recent-comment-title" href="' . esc_url( get_comment_link( $comment->comment_ID ) ) . '">' . get_the_title( $comment->comment_post_ID ) . '</a>';
		}
		if ( $excerpt == 'show' ) {
			$content .= '<div class="surbma-recent-comment-content">' . get_comment_excerpt( $comment->comment_ID ) . '</div>';
		}
		if ( $morelink != '' ) {
			$content .= '<a class="surbma-recent-comment-more-link" href="' . esc_url( get_permalink( $comment->comment_post_ID ) ) . '">' . $morelink . '</a>';
		}
		$content .= '</li>';
	}
	$content .= '</ul>';

	return $content;
}
add_shortcode( 'recent-comments', 'surbma_recent_comments_shortcode_shortcode' );
