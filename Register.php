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
    
    $con=mysqli_connect("localhost","root","", "project");

    //mysqli_select_db($con, "project");

    echo "connection connected";

    //$name = $_POST['username'];
    $pass = $_POST['password'];
    $enc_pass = md5('enc_pass');
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];

    $query = "select * from userlogin where username ='$name' or email ='$email' ";

    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);

    if ($num ==1)
    {
      echo "username or email already taken !!!";
    }
    else
    {
      $table1="create table $name (id int(200) auto_increment primary key, image varchar(200) not null, title 
varchar(200) not null, rs varchar(200) not null, path varchar(200) not null, item_id varchar(200) not null)";
 mysqli_query($con, $table1)
      
       $reg = "insert into userlogin (id,username, encrypted_password, email, phone_number) values('$id','$name','$enc_pass', '$email', '$phone')";
      //mysqli_query($con,$reg);
      header('location:Register.php');
      echo "Registration successful!!!";

    }
    ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>