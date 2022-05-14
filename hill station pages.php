<!DOCTYPE html>
<html>
<head>
	<title>
        Hill Station In Maharashtra
	</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style\styleme.css">
    
  	
</head>
<body background="main imge.jpg" style="color: black;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
	
	<?php 
	session_start();
	$con=mysqli_connect("localhost","root",'',"project");
	
	if (empty($_SESSION['username'])) 
	{?>
		<h1>
		<?php
		echo "Please login first";
		?></h1>
		<?php
	}
	else
	{
		include 'navigation.php';
		?>
		<section class="my-5"> 
	  	<div class="container-fluid" style="height: 10px;">
	    <div class="row" style="width: 100%;color: black;">
		<?php
		$name = $_SESSION['username'];
		//echo $name;
		$query = " SELECT `image`, `title`, `rating`, `id` FROM `hill station details` order by id ASC ";
	    $queryfire = mysqli_query($con, $query);
	    $num = mysqli_num_rows($queryfire);

	    if ($num > 0) {
       		while ($product = mysqli_fetch_array($queryfire)) {
		?>
	
		<div class="col-lg-3 col-md-3 col-12 pb-5" >
          <form action="add favourite page.php" method="post">
          <div class="card">
            <div class="inner">
              <img class="image1" src="<?php echo $product['image']; ?>" alt="Card image"  height="400px">
            </div>
            <div class="card-body">
              <label class="card-title"><?php echo $product['title']; ?></label>
              <p class="card-text"> <?php echo $product['rating']; ?>/5⭐</p>
              <input type="hidden" name="prod_image" value="<?php echo $product['image']; ?>">
              <input type="hidden" name="prod_title" value="<?php echo $product['title']; ?>">
              <input type="hidden" name="prod_rating" value="<?php echo $product['rating']; ?>">
              <input type="hidden" name="id_num" value="<?php echo $product['id']; ?>">
              
            </div>
            <div class="btn-group d-flex">
              <button class="btn btn-dark flex-fill" type="submit">Add to favourite</button>
              <button class="btn btn-dark flex-fill" type="submit" formaction="view_page.php">View</button>
            </div>
          </div>
          </form>
        </div>
        <?php
       }
     }
     else
     {?>
      <div style="color: black;">
        <?php echo "No item here!!!";?>
      </div><?php
     } 
		
	}
	
    
	?>

</div>
  <!--?php include 'footer.php' ?-->;
</div>
</section>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
    
    
    




