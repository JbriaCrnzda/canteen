<?php 

require 'connect.php';

if(!empty($_SESSION['id'])){
    header("Location: index.php");
}

if(isset($_POST['submit'])){
    $student_name = $_POST['student_name']; 
    $student_password = $_POST['student_password']; 
    $result = mysqli_query($conn, "SELECT * FROM users WHERE name = '$student_name'"); 
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if($student_password == $row['password']) {
            $_SESSION['login'] = true;  
            $_SESSION['id'] = $row['id']; 
            header('location: index.php');
        }  
        else {
            echo "<script> alert ('Wrong Password '); </script>";
        }     
    }
    else {
        echo "<script> alert ('User Is Not Registered'); </script>";
    } 
}

?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>GNC ONLINE CANTEEN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/21c345f35f.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <style>
        .btn-field{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        a:link{
            color: #fff;
            color: black;
             text-decoration: none;

        }
        .btn-field button{
            flex-basis: 48%;
            background: #FFFF00;
            color: black;
            height: 40px;
            border-radius: 20px;
            border: 0;
            outline: 0;
            cursor: pointer;
            transition: background 1s;
        }
        input{
            width: 100%;
            background: transparent;
            border: 0;
            outline: 0;
            padding: 18px;
        }
        .input-field{
            background: #eaeaea;
            margin:15px 0;
            border-radius: 3px;
            display: flex;
            align-items: center;
        }
    
    </style>
</head>
<body>
<section class="vh-100" style="background-color: gray;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 5rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="side.png"
                  alt="login form" class="img-fluid" style="border-radius: 5rem 5rem 5rem 5rem; height: 500px; width: 300px;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                    <form class="" action="" method="post" autocomplete="off">

                    <a class="navbar-brand" href="" style="text-align: top , left;">
                    <img src="GNC ONLINE CANTEEN.png" width="160" height="50" class="d-inline-block align-top" alt="">
                    <img src="logo.png" width="55" height="55" class="d-inline-block align-top" alt="">
                    </a>
                    <div class="row justify-content-end">
                      <div class="col-4" style="color: #7AA7FD; font-size: x-large;">
                       Welcome
                      </div>

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <span class="h1 fw-bold mb-0">login</span>
                    </div>

                        <div class="input-field">
                   
                        <label for="student_name"></label>
                        <input type="text" name="student_name" id="student_name" required placeholder="name" style="border-radius: 3rem 3rem 3rem 3rem;"><br></div>
                        <div class="input-field">
                      
                        <label for="student_password"></label>
                        <input type="password" name="student_password" id="student_password" required placeholder="password" style="border-radius: 3rem 3rem 3rem 3rem;"><br><br>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="form2Example31"/>
                          <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                        <div class="btn-field">
                        <button type="button" class="nav-link"><a style="color: black;" href="registraton.php">sign up</a></button>
                            <button type="submit" name="submit" class="disable" id="signinbtn">sign in</button>
                        </div>
                            
                </form>
                <div>
                  
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>