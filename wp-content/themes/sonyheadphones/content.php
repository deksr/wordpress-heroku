    <article class ="allpost-goes-here"id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
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