<?php
get_header();
?>
<div class="row">
<div class="col-8">
  <?php wp_nav_menu(array('menu' => 'Category')); ?>
</div>
<div class="col-4">
<?php wp_nav_menu(array('menu' => 'Shop')); ?>
</div>
</div>

<section class="row">
  <?php
  // the Loop
  while (have_posts()) : the_post(); 
  ?>
<div class="col-4">
  <?php
    // the content of the post
    the_content(); 
  ?>
</div>
<?php
endwhile;
  ?>
</section>
<?php

get_sidebar();
get_footer();
