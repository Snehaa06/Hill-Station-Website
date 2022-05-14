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
    
</head>
<body background="main imge.jpg" style="color: black;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
  <nav class="navbar navbar-expand-lg navbar-light transparent">
  <!--img src="logo1.png" height="5%" width="5%" /-->
  <a class="navbar-brand font-italic" href="#">Hill Station</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    
  </div>
</nav>

<?php 
  /*session_start();
  $con=mysqli_connect("localhost","root","","project");
  //$name =$_SESSION["username"];
  if (empty($_SESSION["username"])) {
    echo "var not set";
  }
  else{
    echo $_SESSION["username"];
  }*/
  
    
  ?>

<div class="container">
  <div class="login-box" style="height: 480px !important; top: 55% !important;left: 50% !important ">
    
        
        <h2> Login Here</h2>
        <form action="navigation.php" method="post">
          <div class="form-group">
            <label>Username</label><br>
            <i class="fa fa-user"></i><input type="text" name="user" required="true">
          </div>
          <div class="form-group">
            <label>Password</label><br>
            <i class="fa fa-lock"></i><input type="password" name="password" required="true">
            <br><br>
          </div>
          <button type="submit" class="btn btn-info">Login</button><br><br>
          
        </form>
        <a href="forgot pass page.php">Forgot Password?</a><br><br>
        <h7>If you have not yet registered, then first register!!!</h7><br><br>
        <a href="Register page.php" class="btn btn-info">Register</a>
        
      
      
    
    
  </div>
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>


