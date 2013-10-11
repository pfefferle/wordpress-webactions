<?php
/*
 Plugin Name: web actions
 Plugin URI: https://github.com/pfefferle/wordpress-webactions
 Description: Adds [web action](http://indiewebcamp.com/webactions) support to some WordPress core features 
 Author: pfefferle
 Author URI: http://notizblog.org/
 Version: 1.0.0-dev
*/

/**
 * add webaction to the reply links in the comment section
 *
 * @param string $link the html representation of the comment link
 * @param array $args associative array of options
 * @param int $comment ID of comment being replied to
 * @param int $post ID of post that comment is going to be displayed on
 */
function webactions_reply_link( $link, $args, $comment, $post ) {
  $permalink = get_permalink($post->ID);
  
  return "<action do='reply' with='$permalink'>$link</action>";
}
add_filter('comment_reply_link', 'webactions_reply_link', null, 4);