<?php 

// Get the data from the form
$firstname = $_POST['Id'];
$firstname = $_POST['Firstname'];
$lastname = $_POST['Lastname'];
$gamename = $_POST['Gamename'];
$ign = $_POST['Ign'];
$position = $_POST['Position'];

//------------------------- INSERT DATA TO DB --------------------------

// Make a connection to your database
$conn = new mysqli("localhost", "root", "", "player_database");

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL statement
$sql = "INSERT INTO player_database (Id, Firstname, Lastname, Gamename, Ign, Position) VALUES ('$Id', '$Firstname', '$Lastname', '$Gamename', '$Ign', '$Position')";

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
