<?php
require 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$position = $_POST["position"];
	$age = $_POST["age"];
	$address = $_POST["address"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = md5($_POST["password"]);
	$confirmpassword = md5($_POST["confirmpassword"]);
	$gender = $_POST["gender"];
	$duplicate = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username' OR email = '$email' ");
	if(mysqli_num_rows($duplicate) > 0){
		echo 
		"<script> alert('Username or Email has already taken!'); </script>";
	}
	else{
		if($password == $confirmpassword){
			$query = "INSERT INTO login VALUES('','$first_name','$last_name','$position','$age','$address','$username','$email','$password','$gender')";
			mysqli_query($conn,$query);
			echo
			"<script> alert('Register Successfully'); </script>";
			 
		}
		else{
			echo 
			"<script> alert('Password Does Not Match'); </script>";
		}
	}
}
?>



<!DOCTYPE html>
<html>
    <head>
	    <title>Registration Form</title>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=divice-width, initial scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
	       <h1>Registration Form</h1>
	<ul>
		   <li class="rigestration">
		   <form method="POST" action ="signup.php">
		      <br />
		      <label class="reg">First Name</label>
			  <input type="text" name="first_name" id = "first_name" required value = "" placeholder="Enter your FirstName" >
			  <br />
			  <br />

			  <label class="reg">Last Name</label>
			  <input type="text" name="last_name" id = "last_name" required value = "" placeholder="Enter your LastName" >
			  <br />
			  <br />

			  <label class="reg">Position</label>
			  <input type="text" name="position" id = "position" required value = "" placeholder="Enter your Position" >
			  <br />
			  <br />

			  <label class="reg">Age</label>
			  <input type="text" name="age" id = "age" required value = "" placeholder="Enter your Age" >
			  <br /> 			  
			  <br />

			  <label class="reg">Address</label>
			  <input type="text" name="address" id = "address" required value = "" placeholder="Enter your address" >
			  <br />
			  <br />
			  <label class="reg">Username</label>
			  <input type="text" name="username" id = "username" required value = "" placeholder="Enter your Username" >
			  <br /> 			  
			  <br />
			  <label class="reg">Email</label>
			  <input type="email" name="email" id = "email" required value = "" placeholder="Enter your Email" >
			  <br /> 			  
			  <br />
			  <label class="reg">Password</label>
			  <input type="password" name="password" id = "password" required value = "" placeholder="Enter your Password" >
			  </br>
			  <label class="reg">Confirm Password</label>
			  <input type="password" name="confirmpassword" id = "confirmpassword" required value = "" placeholder="Confirm Password" >
			  </br>
			  
			  <div class="gender">
			  <input type="radio" name="gender" value="m" />Male
			  &nbsp;
			  <input type="radio" name="gender" value="f" />Female
			  </div>
			  <br />
			  <br />
			  <button class="submit" type="submit">Register</button>
			</form>
			</li>  
        </ul>
    </body>
</html>