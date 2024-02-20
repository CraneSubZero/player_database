<?php
$conn = new mysqli("localhost", "root", "", "player_database");

//construct sql state
$sql = 'SELECT * FROM player_database ORDER BY player_database.`Id` DESC';

$result = $conn->query($sql);

$players = array(); // Create an empty array to store player data

while ($row = $result->fetch_assoc()) {
    // Add each player's data to the array
    $players[] = array(
        "Id" => $row['Id'],
        "Firstname" => $row['Firstname'],
        "Lastname" => $row['Lastname'],
        "Gamename" => $row['Gamename'],
        "Ign" => $row['Ign'],
        "Position" => $row['Position']
    );
}

// Convert the array to JSON
$jsonData = json_encode($players, JSON_PRETTY_PRINT);

// Output the JSON data
header('Content-Type: application/json');
echo $jsonData;

// Close the database connection
$conn->close();

?>