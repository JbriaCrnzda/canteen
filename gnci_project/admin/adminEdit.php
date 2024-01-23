<?php
// Edit record here...
require("connect.php");
 
$student_id = $_REQUEST["id"];
$query = "SELECT * FROM users WHERE id = '".$student_id.
"' ";
 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<html>
 
 <head>
     <title>Admin Edit Page</title>
  
 <?php
     $msg = "";
  
     if(isset($_POST['new']) && $_POST['new'] == 1) {
         $id = $_REQUEST["id"];
         $order_status = $_REQUEST["order_status"];
         $update = "UPDATE `users` SET
        `order_status`='$order_status'  WHERE `id` = '".
         $student_id."' ";
         mysqli_query($conn, $update);
         $msg = "Record was successfully updated!";
     } else {
  
 ?>
  
<style>
    body {
        background-color: #d0aa7e;
        margin: 0;
        padding: 0;
        font-family: 'Roboto Mono', monospace;
    }




    .edit-order-container {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        margin-top: 220px;
        width: 500px;
        background-color: #d9d9d9;
        border-radius: 10px;
        line-height: 30px;
        padding: 20px; 
    }
</style>
 </head>
  
 <body>
    <div class="edit-order-container">
        <h1>Update Order Status</h1>
    
     <form action="" method="post">
         <input type="hidden" name="new" value="1">
         <input type="hidden" name="student_id" value="<?php echo $row['id']; ?>"> <br>
         <!-- <label for="student_name">Student Name: </label>
         <input type="text" id="student_name" name="student_name" value="<?php echo $row['name']; ?>" required> <br> -->
         <label for="order_status">Order Status: </label>
         <input type="text" id="order_status" name="order_status" value="<?php echo $row['order_status']; ?>" required> <br> <br>
         <!-- <label for="student_address">Student Address: </label>
         <input type="text" id="student_address" name="student_address" value="<?php echo $row['address']; ?>" required> <br> -->
         <input type="submit" value="Update Record">
     </form>
     <?php } ?>
  
     <p style="color:blue;"><?php echo $msg; ?></p>
     <button type="button" class="nav-link"><a style="color: black; text-decoration: none;" href="./admin.php">Go Back to Admin Page</a></button>
    </div>
     
 </body>
  
 </html>
