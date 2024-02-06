<?php 

//get the data from the form
$id = $_GET['id'];

//------------------------- DELETE DATA TO DB --------------------------
//1 . Make a connection to your database
$conn = new mysqli("localhost", "root", " ", "player_database");

// SQL STATEMENT -> that can DELETE the data in database
$sql = "DELETE FROM students WHERE id=".$id."";


// is to run the sql code in php
$conn->query($sql);

//redirect
header('location: index.php');