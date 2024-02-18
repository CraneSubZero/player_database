<?php 

//get the data from the form
$id = $_GET['id'];
$firstname = $_POST['Firstname'];
$lastname = $_POST['Lastname'];
$gamename = $_POST['Gamename'];
$ign = $_POST['Ign'];
$position = $_POST['Position'];

//------------------------- INSERT DATA TO DB --------------------------


//1 . Make a connection to your database
$conn = new mysqli("localhost", "root", "", "player_database");

// SQL STATEMENT -> that can update the data in database
$sql = "UPDATE player_database SET firstname='".$firstname ."', lastname='".$lastname."', gamename='".$gamename."', ign= '".$ign."', position='".$position."' WHERE id=".$id."";


// is to run the sql code in php
$conn->query($sql);

//redirect
header('location: index.php');



