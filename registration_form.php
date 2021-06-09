<?php
// Include config file
require_once "connection.php";
 if(isset($_POST['submit'])) {
       $username = $_POST['username'];;
       $useremail = $_POST['useremail'];
       $password = $_POST['password'];
       $confirm_password = $_POST['confirm_password'];
       
       if ($password == $confirm_password) {
           mysqli_query($con,"INSERT INTO users(`user_name`,`email`,`password`) VALUES ('$username','$useremail','$password')");
       header('location:index.php');
       }
         
        
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
		body{ font: 14px sans-serif;background-color : #8FC1E3;	 }
		.form-css{
			padding: 10px;
			width: 350px;
			height: 500px;
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
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form  method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="useremail" class="form-control">
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="index.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>