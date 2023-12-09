<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$ID = $_POST['ID'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$address = $_POST['address'];
$occupation = $_POST['occupation'];
$gender = $_POST['gender'];
$email = $_POST['email'];

// SQL query to insert data into the table
//$sql = "INSERT INTO camutan_resedent (first_name,last_name,age,address,occupation,gender,email)
//                                           VALUES ('$first_name','$last_name','$age','$address','$occupation','$gender','$email')";
$sql="UPDATE camutan_resedent SET first_name = '$first_name' , last_name = '$last_name' ,
								  age = '$age' ,address = '$address',occupation = '$occupation',gender = '$gender',
								  email ='$email' WHERE ID = '$ID';";
// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
    header("location: resident.php");
              exit;
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>