<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select id from users where  Email='$email' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['userid']=$ret['id'];
     header('location:dashboard.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CGMS - Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bg-light">
  <div class="row "> <h2 class="text-center">Care Giving Management System</h2></div>
  <hr>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-5 bg-info rounded">
        
        <h2 class="text-center">Login</h2>
        <hr>
        <form action="">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">User Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Eg. Naftaly">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
          </div>
         

          <button type="button" class="btn btn-primary my-1">Login</button>
        
        </form>
      </div>

    </div>
  </div>
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
