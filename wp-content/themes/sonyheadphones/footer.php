
	  <footer> This is the footer </footer>
	   
	</div> <!-- container -->


      <!-- calling the navbar-->		  
      <?php 
			wp_nav_menu(array('theme_location' => 'secondary'));
			?>

			 <!-- 	this calls all script files-->	
		  <?php 
		  wp_footer();
		  ?>
  </body>
</html>