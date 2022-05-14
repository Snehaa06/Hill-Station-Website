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
		include 'navigation.php';
    $table_name = $_SESSION["username"];
		?>
	<div class="container">
  <!--div class="login-box"-->
    <div class="table table-responsive">
      <table class="table table-striped" style="background-color: rgba(0, 0, 0, 0.5) ;color: white;">
            
            <tr>
                <th scope="col">Sr. no</th>
                <th scope="col">Item id</th>
                <th scope="col">Title</th>
                <th scope="col">Rating</th>
                <th scope="col">View</th>
                <th scope="col">Remove</th>
              </tr>

          <?php
            $counter = 0;
            
            $query = " SELECT  * FROM $table_name order by id ASC ";
            $queryfire = mysqli_query($con, $query);
            $num = mysqli_num_rows($queryfire);

            if ($num > 0) {
               while ($product = mysqli_fetch_array($queryfire)) {
                ?>
                  <tbody>
                  <tr>
                    <th scope="row"><?php echo ++$counter; ?></th>
                    <td><?php echo $product['item_id']; ?></td>
                    <td><?php echo $product['title']; ?></td>
                    <td><?php echo $product['rating']; ?>/5⭐</td>
                    <form action="remove_fav.php" method="post">
                      <input type="hidden" name="id_num" value="<?php echo $product['item_id']; ?>">
                    <td><button class="btn btn-dark flex-fill" type="submit">Remove</button></td>
                    <td><button class="btn btn-dark flex-fill" type="submit" formaction="view_page.php">View</button></td>
                    </form>
                  </tr>
                  
                </tbody>
                 
        <?php
       }
     }?>
     </table>
     <?php
    /*else
     { ?>
      <div style="color: black;">
        <?php echo "No item here!!!";?>
      </div><?php
     }*/
    
  }
  
    
  ?>

</div>
  <!--?php include 'footer.php' ?-->
<!--/div-->
</div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>


