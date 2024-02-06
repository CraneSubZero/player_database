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
    <form action="add-student.php" method="POST">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-4">
          <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">First Name:</label>
            <input name="firstname" type="text" class="form-control" />
          </div>
          <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">Last Name:</label>
            <input name="lastname" type="text" class="form-control" />
          </div>
          <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">Game Name:</label>
            <input name="gamename" type="text" class="form-control" />
          </div>
          <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">IGN:</label>
            <input name="ign" type="text" class="form-control" />
          </div>
          <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">Position:</label>
            <input name="position" type="text" class="form-control" />
          </div>

          <div class="mb-4">
            <button type="submit" class="btn btn-success">Add Record</button>
          </div>

        </div>

      </div>
    </form>
</div>
</div>

  <br>
    <?php
    //create database connection
    $conn = new mysqli("localhost", "root", "", "player_database");

    //construct sql state
    $sql = 'SELECT * FROM player_database';

    $result = $conn->query($sql);
    ?>
  <div class="container">
    <div class="table-container">
    <div class="row">
      <table class="table table-border">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Game Name</th>
            <th scope="col">IGN</th>
            <th scope="col">Position</th>
          </tr>
        </thead>
        <tbody>

          <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
              <td><?php echo $row['id'];  ?></td>
              <td><?php echo $row['firstname'];  ?></td>
              <td><?php echo $row['lastname'];  ?></td>
              <td><?php echo $row['gamename'];  ?></td>
              <td><?php echo $row['ign'];  ?></td>
              <td><?php echo $row['position'];  ?></td>
              <td>
                <a href="edit-student.php?id=<?php echo $row['id'];  ?>" class="btn btn-sm btn-info">Edit</a>
                <a onclick="delete_student(<?php echo $row['id'];  ?>)" href="#" class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr>

          <?php endwhile; ?>
        </tbody>
      </table>
    </div>


  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>


</body>

<script>


  function delete_student(id) {
      if (confirm("Do you want to delete this data? ")){
       swindow.location = "delete-student.php?id="+id;
      }
  }

      
</script>

</html>