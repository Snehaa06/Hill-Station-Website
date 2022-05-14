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
  <a class="navbar-brand font-italic" href="#">Hill Station</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    
  </div>
</nav>

<div class="container">
	<div class="login-box" style="height: 600px !important; top: 55% !important;left: 50% !important ">
				
				<h2> Register Here</h2>
				<form action="navigation.php" method="post">
					<div class="form-group">
						<label>Username</label><br>
						<i class="fa fa-user"></i><input type="text" name="username" required="true">
					</div>
					<div class="form-group">
						<label>Email</label><br>
						<i class="fa fa-envelope"></i><input type="email" name="email" required="true">
					</div>
					<div class="form-group">
						<label>Mobile number</label><br>
						<i class="fa fa-phone"></i><input type="text" name="phone_number" pattern="[1-9]{1}[0-9]{9}" title="input should be a number and not greater than 10 digits" required="true">
					</div>
					<div class="form-group">
						<label>Password</label><br>
						<i class="fa fa-lock"></i><input type="password" name="encrypted_password" required="true">
						
					</div>
					<button type="submit" class="btn btn-info">Register</button><br><br>
					
				</form>
				<h7>If you have already registered, then click on login!!!</h7><br><br>
				<a href="login page.php" class="btn btn-info">Login</a>
				
			
		
	</div>
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>