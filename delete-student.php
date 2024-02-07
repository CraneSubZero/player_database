<?php 

//get the data from the form
$firstname = $_POST['Id'];
$firstname = $_POST['Firstname'];
$lastname = $_POST['Lastname'];
$gamename = $_POST['Gamename'];
$ign = $_POST['Ign'];
$position = $_POST['Position'];

//------------------------- DELETE DATA TO DB --------------------------
//1 . Make a connection to your database
$conn = new mysqli("localhost", "root", "", "player_database");

// SQL STATEMENT -> that can DELETE the data in database
$sql = "DELETE FROM player_database WHERE """;


// is to run the sql code in php
$conn->query($sql);

//redirect
header('location: index.php');