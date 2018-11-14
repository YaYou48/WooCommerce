<?php
get_header();
/*
Template Name: Blog
*/


 
// The Query (afficher Loop WP sur page personnalisé)
$the_query = new WP_Query( array("post_type" => "post") );
 
// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<li>' . get_the_title() . '</li>';
        echo '<li>' . get_the_post_thumbnail_url() . '</li>';
        echo '<li>' . woocommerce_get_product_thumbnail() . '</li>';
    }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();




get_sidebar();
get_footer();