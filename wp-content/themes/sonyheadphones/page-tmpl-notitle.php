<?php

/* Template Name: Page No Title */

?>

<!-- 	calling the header template-->	
  <?php get_header(); ?>

    <h1> This is my index.php</h1>

  <!-- 	calling the data: this is a loop-->	
    <?php 
    if( have_posts() ):
      while( have_posts() ): the_post(); ?>

        <h3><?php the_title(); ?></h3>
        <h2> This is a page for customizing using a template </h2>
         <small> posted on: <?php the_time('F j, Y'); ?>, at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
        <p><?php the_content();?></p>
        <hr>
      <?php endwhile;
    endif;
    ?>

  <!-- 	calling the footer template-->	
  <?php get_footer(); ?>
