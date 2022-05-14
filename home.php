<!DOCTYPE html>
<html>
<head>
	<title>
        Hill Station In Maharashtra
	</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="style\styleme.css">
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .carousel .carousel-item {
  height: 780px;
}

.carousel-item img {
    position: absolute;
    top: 0;
    left: 0;
    min-height: 780px;
}
  </style>
  	
</head>
<body background="background_image.jpg" style="color: black;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
	
	<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","project");
	
	if (empty($_SESSION["username"])) 
	{?>
		<h1>
		<?php
		echo "Please login first";
		?></h1>
		<?php
	}
	else
	{
		include "navigation.php";
		$name = $_SESSION["username"];
		//echo $name;
		?>
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="Image1.jpg" alt="lonavala" width="1100" height="500">
		      <div class="carousel-caption">
		        <h1><a href="navigation.php" class="text-dark">lonavala</a></h1>
		        
		      </div> 
		    </div>
		    <div class="carousel-item">
		      <img src="Image2.jpg" alt="Khanadala" width="1100" height="500">
		      <div class="carousel-caption">
		        <h1><a href="navigation.php" class="text-dark">Khanadala</a></h1>
		        
		      </div> 
		    </div>
		    <div class="carousel-item">
		      <img src="Image3.jpg" alt="Mahabaleshwar" width="1100" height="500">
		      <div class="carousel-caption">
		        <h1><a href="navigation.php" class="text-dark">Mahabaleshwar</a></h1>
		        
		      </div> 
		    </div>
		  </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>
		<?php
		
	}
	
    
	?>

