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
$ID = $_GET['ID'];
// SQL query to insert data into the table
//DELETE FROM camutan_resedent WHERE `camutan_resedent`.`ID` = 
$sql = "DELETE FROM camutan_resedent WHERE ID = ".$ID.";";

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