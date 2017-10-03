<?php 
/**
 * @package Jopfre_Next_Prev_Posts
 * @version 1.0
 */
/*
Plugin Name: Jopfre Next Prev Posts
Plugin URI:
Description: 
Author: jopfre
Version: 1
Author URI:
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
class JopfreNextPrevPosts extends WP_Widget {

  function __construct() {
     // Instantiate the parent object
    parent::__construct( false, 'Jopfre Next Prev Posts' );
  }

  function widget( $args, $instance ) {
    // Widget output
    ob_start();
      echo '<div class="next-prev">
              <span class="prev">';
      previous_post_link("%link", '<i class="fa fa-angle-left" aria-hidden="true"></i>Previous article');
      echo '  </span><span class="next">';
      next_post_link("%link", 'Next article<i class="fa fa-angle-right" aria-hidden="true"></i>');
      echo '   </span>
            </div>';
    echo ob_get_clean();
  }

  function update( $new_instance, $old_instance ) {
     // Save widget options
  }

  function form( $instance ) {
     // Output admin widget options form
  }
}

function jopfre_next_prev_posts_register_widgets() {
  register_widget( 'JopfreNextPrevPosts' );
}

add_action( 'widgets_init', 'jopfre_next_prev_posts_register_widgets' );
?>