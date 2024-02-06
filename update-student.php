<?php 

//get the data from the form
$id = $_GET['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

//------------------------- INSERT DATA TO DB --------------------------


//1 . Make a connection to your database
$conn = new mysqli("localhost", "root", " ", "player_database");

// SQL STATEMENT -> that can update the data in database
$sql = "UPDATE students SET firstname='".$firstname ."',lastname='".$lastname."' WHERE id=".$id."";


// is to run the sql code in php
$conn->query($sql);

//redirect
header('location: index.php');