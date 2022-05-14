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
<body background="main imge.jpg" style="background-attachment: fixed; color: black; background-repeat: no-repeat;background-size: cover;">

  <h1>
    <?php 
    session_start();
    

    $con=mysqli_connect("localhost","root","","project");


    $name = $_POST['user'];
    $pass = $_POST['password'];
    if ($name == "Admin" && $pass == "admin")
    {
      $_SESSION["username"] = "admin";
      isset($name);
      header('location:admin hillstation_page.php');
    }
    else
    {

    $enc_pass = md5($pass);
    $query = "select * from userlogin where username='$name' && encrypted_password='$enc_pass'";
    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);

    if ($num ==1)
    {
      $_SESSION["username"] = $name;
      isset($name);
      
      header('location:navigation.php');
    }
    else
    {
    
      echo "Incorrect username or password";
      
    }
  }

    ?>





</body>
</html>
