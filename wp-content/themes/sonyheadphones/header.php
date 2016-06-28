<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<title> Allergy Theme</title>

  <!-- 	this calls all style files-->	
  <?php wp_head(); ?>
</head>


 <!-- here we detects if we are in home page then it return true and false. if true then we store the values in array and set it to variable. This is used to set custom classes to the tags-->	
<?php 
  if( is_home()):
  	$allergy_classes = array('allergy-class', 'my-class' );
  else:
  	$allergy_classes = array( 'no-allergy-class');
  endif;
 ?>


 <!-- this is how we can add custom classes to the tags. see above how we can extend the functionality-->
<body <?php body_class($allergy_classes); ?> >



<!-- bootstrap style goes here-->
  <div class="container">
		<div class="row">
			<div class="col-xs-12">
				<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="container-fluid">
					  <div class="navbar-header">
					    <a class="navbar-brand" href="#">Coffee & Keyboard</a>
					  </div>

					    <!-- this calls navigaton menu on the header-->	
							<?php 
								wp_nav_menu(array('theme_location' => 'primary', 'container' => false,
															'menu_class' => 'nav navbar-nav navbar-right'));
							?>
					</div>
			  </nav>
			</div>
		</div>  <!-- row -->



	<!-- this adds the header image, ccurrently only works for png images and not jpeg. this currently bit is broken-->
	<img src= "<?php// header_image(); ?>" height="<?php //  echo get_curom_header()->height; ?>" width= "<?php//echo get_custom_header()->width; */?>" alt="" />
