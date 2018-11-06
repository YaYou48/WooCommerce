<?php

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_title(); ?>
<?php the_content(); ?>

<?php 
endwhile;

else: ?>

<p><?php _e('Désolé, aucun article ne correspond à votre recherche.'); ?></p>

<?php endif;

get_sidebar();
get_footer();
