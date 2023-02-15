<?php 
/**
 * JobScout functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package JobScout
 */

 
 
 /**
  * Modify filter hooks of WP Job Manager plugin.
  */


add_action('wp_ajax_my_action', 'data_fetch');
add_action( 'wp_ajax_nopriv_my_action', 'data_fetch');
function data_fetch() {
    $the_query=new WP_Query(array('post_per_page'=>10));
    if($the_query->have_post()):
        while($the_query->have_posts()) : $the_query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <?php endwhile;
        wp_reset_postdata(  );
    endif;
    die();
}
