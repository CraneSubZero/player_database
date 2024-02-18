<?php 
    // create database connection
    $id = $_GET['id'];

    $conn = new mysqli("localhost", "root", "", "player_database");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form is submitted for deletion
    if(isset($_POST['delete'])){
        $sql = "DELETE FROM player_database WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            header("Location: index.php"); // Redirect to your player list page
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    // Fetch the player data for display
    $sql = "SELECT * FROM player_database WHERE id=".$id."";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Player-List Management System</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="main">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-4">
                        <!-- Display player information here -->
                        <h2>Are you sure you want to delete this record?</h2>
                        <p>
                            First Name: <?php echo $data['Firstname']; ?><br>
                            Last Name: <?php echo $data['Lastname']; ?><br>
                            Game Name: <?php echo $data['Gamename']; ?><br>
                            IGN: <?php echo $data['Ign']; ?><br>
                            Position: <?php echo $data['Position']; ?><br>
                        </p>
                        <div class="mb-4">
                            <button type="submit" name="delete" class="btn btn-danger">Delete Record</button>
                            <a href="index.php" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>