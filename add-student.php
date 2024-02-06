<?php 

//get the data from the form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

//------------------------- INSERT DATA TO DB --------------------------


//1 . Make a connection to your database
$conn = new mysqli("localhost", "root", " ", "player_database");

// SQL STATEMENT -> Programming of lang. of database
$sql = "INSERT INTO students (firstname, lastname) VALUES ('".$firstname."', '".$lastname."')";

// is to run the sql code in php
$conn->query($sql);

//redirect
header('location: index.php');