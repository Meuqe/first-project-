<?php
session_start();

// Check if the user is already logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]=== true){
    header("location: welcome.php");
    exit;
}

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Your database connection code here
    // Replace database_credentials with your actual database credentials

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myinfo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve values from login form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform a query to check if the user exists in the database
    $sql = "SELECT id, email, password FROM login WHERE email = '$email'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        // Verify the password
        if(md5($password) == $row["password"]){
            // Set session variables
            $_SESSION["email"] = $row["email"];
            $_SESSION["id"] = $row["id"];

            // Redirect to welcome page
            header("Location: welcome.php");
            exit;
        } else {
            $error = "Invalid password".$row["password"];
        }
    } else {
        $error = "Username not found";
    }

    // Close database connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=divice-width, initial scale=1.0">
      <title>login</title>
      <link rel="stylesheet" href="style.css" type="text/css" /> 
      
   </head>
   <body>
        <h1>Login</h1>
            <?php if(isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>

        
         <form method="POST" action="login.php">
        <ul class="ul">
              <br />
              <label>Email</label>
              <input class="inputlogin" name="email" type="email" required />
              <br />
              <br />
              <br />
              <label>Password</label>
              <input class="inputlogin" name="password" type="password" required />
              <br />
              <br />
            <div class="button">
               <button class="sub" type="submit">Login </button>
            </div>   
               <br />
               <br />              
        </ul>     
         </form>
   </body>
   </html>