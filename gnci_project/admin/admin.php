<?php
// Display record here...
require("connect.php");
 
$result = mysqli_query($conn, 'SELECT * FROM users');


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin Page</title>
    <style>
       body {
        font-family: 'Roboto Mono', monospace;
        font-size: 20px;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <a href="#">Data</a>
              </li>
            </ol>
          </nav>
        </div>
      </nav>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
          <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Order_Status</th>
            <th>Address</th>
            <th>Actions</th>
          </tr>
        </thead>
        <?php
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['order_status']?></td>
            <td><?php echo $row['address']?></td>
            <td><a href="adminEdit.php?id=<?php echo $row["id"];?>">Edit</a></td>
            
        </tr>
        <?php } ?>
      </table>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>