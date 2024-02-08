<?php 

// Get the data from the form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gamename = $_POST['gamename'];
$ign = $_POST['ign'];
$position = $_POST['position'];

//------------------------- INSERT DATA TO DB --------------------------
//------------------------ This is for the Submitting Function -----------------

// Make a connection to your database
$conn = new mysqli("localhost", "root", "", "player_database");

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL statement
$sql = "INSERT INTO player_database (firstname, lastname, gamename, ign, position) VALUES ('$firstname', '$lastname', '$gamename', '$ign', '$position')";

// Run the SQL query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

// Redirect
header('location: index.php');
?>
