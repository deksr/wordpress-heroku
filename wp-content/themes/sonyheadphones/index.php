  <!-- 	calling the header template-->	
  <?php get_header(); ?>

<!--      <h1> This is my index.php</h1>-->
  <!-- 	calling the data: this is a loop-->	
    <?php 
    if( have_posts() ):
      while( have_posts() ): the_post(); ?>

        <!-- this gets specfic part of template into this file. thiis content went into content.php file. this is going to look for a file called content-aside.php/ content-image.php etc. you can give any name ot just content. but make sure name the file similar way. jupiter-aside.php-->       
        <? /* php get_template_part('content', get_post_format()); */?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
       <!-- you can call medium large or thumbnail--> 


      <header class="entry-header"> 
      <!--   replace <h3><?php/* the_title(); */?></h3> with this below. it provides link and takes us to the page of each post-->       		
      <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
     
        <small> posted on: <?php the_time('F j, Y'); ?>, at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
      </header>



      <!-- add conditions here--> 
      <div class="row">
	      <?php if( has_post_thumbnail() ): ?>
					<div class="col-xs-12 col-sm-4">
		        <div class="thumbnail-img"> <?php the_post_thumbnail('medium')?> </div> <br> 
		      </div>
					<div class="col-xs-12 col-sm-8">
		        <p><?php the_content();?></p>
		      </div>
	      <?php else: ?>
		      <div class="col-xs-12">
		      	<?php the_content(); ?>
		      </div>
	      <?php endif; ?>
      </div>
      <hr>

      

     </article>

      
      <?php endwhile;
    endif;
    ?>

  <!-- 	calling the footer template-->	
  <?php get_footer(); ?>


