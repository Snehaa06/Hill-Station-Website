<!DOCTYPE html>
<html>
<head>
  <title>
    Hill Station In Maharshtra
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
     $f_id = $_POST['id_num'];
     $f_rating = $_POST['prod_rating'];
     $f_title = $_POST['prod_title'];
     $f_image = $_POST['prod_image'];

     $table_name = $_SESSION['username'];

     $query = "select * from $table_name where item_id='$f_id' ";

    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);

    if ($num ==1)
    {
      echo "item already in Favourites !!!";
      //echo $image;
    }
    else
    {
      
      $reg = "insert into $table_name (item_id, title, image, rating) values('$f_id','$f_title', '$f_image', $f_rating)";
      mysqli_query($con, $reg);
      header('location:fav_page.php');
      //echo $_SESSION['username'];;
      echo "Item added successfully!!!";

    }

  }


     


    
    
    ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
