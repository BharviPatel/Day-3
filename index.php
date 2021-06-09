<?php
  session_start();

 include"connection.php";

  if(isset($_POST['submit']))
  {
    $email=$_POST['email'];
    $password=$_POST['password'];
  
    $query=mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND password='$password'");

    if($row = mysqli_fetch_array($query)) {
      $_SESSION['email']=$email;
      $_SESSION['Password'] = $password;
//print_r($row['admin']);
	  $_SESSION['Admin'] = $row['admin'];

     header('location:products.php');
    }else{

      header('location:index.php');
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif;background-color : #8FC1E3;	 }
		.form-css{
			padding: 10px;
			width: 350px;
			height: 300px;
			background-color : white;
			position: absolute;
			top:0;
			bottom: 0;
			left: 0;
			right: 0;
			margin : auto;
		}
    </style>
</head>
<body>
		<div class="form-css">
			<h2>Login</h2>
			
			<?php 
			if(!empty($login_err)){
				echo '<div class="alert alert-danger">' . $login_err . '</div>';
			}        
			?>

			
			<form method="post">
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder="Please enter your email...">
					
				</div>    
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Please enter your password..">
					
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary" value="Login">
				</div>

				<p>Don't have an account? <a href="registration_form.php">Sign up now</a>.</p>
			</form>
		</div>
</body>
</html>