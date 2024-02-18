<?php 
   // Create database connection
  // This is for the Edit Function 
   $firstname = $_POST['Id'];
   $firstname = $_POST['Firstname'];
   $lastname = $_POST['Lastname'];
   $gamename = $_POST['Gamename'];
   $ign = $_POST['Ign'];
   $position = $_POST['Position'];

   $conn = new mysqli("localhost", "root", "", "player_database");
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
       <form action="update-student.php?id=<?php echo $data['Id']; ?>" method="POST">
      <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-4">
            <div class="mb-4">
              <label for="FormControlInput1" class="form-label">ID:</label>
               <input value="<?php echo $data['Id']; ?>" name="Id" type="text" class="form-control" />
            </div>
            <div class="mb-4">
              <label for="FormControlInput1" class="form-label">First Name:</label>
               <input value="<?php echo $data['Firstname']; ?>" name="Firstname" type="text" class="form-control" />
            </div>
            <div class="mb-4">
              <label for="FormControlInput2" class="form-label">Last Name:</label>
               <input value="<?php echo $data['Lastname']; ?>" name="Lastname" type="text" class="form-control" />
            </div>
            <div class="mb-4">
              <label for="input-group text" class="form-label">Game Name:</label>
              <select class="form-select" name="Gamename">
                  <option selected disabled>Select Games</option>
                  <option value="Mobile Legends: Bang Bang">Mobile Legends: Bang Bang</option>
                  <option value="League of Legends">League of Legends</option>
                  <option value="PUBG: Battlegrounds">PUBG: Battlegrounds</option>
                  <option value="Call of Duty">Call of Duty</option>
              </select>
            </div>
            <div class="mb-4">
              <label for="FormControlInput1" class="form-label">IGN:</label>
              <input value="<?php echo $data['Ign']; ?>" name="Ign" type="text" class="form-control" />

            </div>
            <div class="mb-4">
              <label for="FormControlInput1" class="form-label">Position:</label>
              <input value="<?php echo $data['Position']; ?>" name="Position" type="text" class="form-control" />

            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-success">Update Record</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>

</body>

</html>
