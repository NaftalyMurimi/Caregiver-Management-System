<!-- admin login -->
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($con,"select id from admin where  Username='$username' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['adminid']=$ret['id'];
     header('location:admin/dashboard.php');
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
<body class="container-fluid bg-light">
  <div class="row"> <h2 class="text-center">Care Giving Management System</h2></div>
  <hr>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-5 bg-info rounded">
        
        <h2 class="text-center">Admin Login</h2>
        <hr>
        <p style="font-size:16px; color:red; text-align:center;">
          <?php if($msg){echo $msg;}?>
        <form action="" method="POST">
            
         
          <div class="mb-3">
            <label for="" class="form-label">User Name</label>
            <input type="text" class="form-control" name="username"  placeholder="Eg. Naftaly">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="password">
          </div>
         

          <button type="submit" value="login" name="login" class="btn btn-primary mb-3">login</button>
        
        </form> 
        
      </div>

    </div>
  </div>
	

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
 crossorigin="anonymous"></script>
</body>
</html>
