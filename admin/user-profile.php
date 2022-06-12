<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['update']))
  {
    $loginid=$_SESSION['adminid'];
    $fname=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
	
	
     $query=mysqli_query($con, "update admin set Username ='$fname', Email='$email',  Password='$password', 
	where id='$loginid'");
    if ($query) {
    $msg="Admin profile has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <?php include_once "../includes/header.php" ?>
<div class="container-fluid">

<div class="row">
    <?php include_once "sidebar.php" ?>
    <div class="col-10 list-group-item-primary">
    <form action="" method="POST" >
						<p style="font-size:16px; color:green" align="center"> <?php if($msg){echo $msg;}  ?> </p>
<?php
$loginid=$_SESSION['adminid'];
$ret=mysqli_query($con,"select * from admin where id='$loginid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>				
						<div class="col-6">
						<label for="name" class="form-label">User Name:</label>
						<input class="form-control" placeholder="User Name" value="<?php  echo $row['Username'];?>" name="username" type="text" required="true">
					</div>
					<div class="col-6">
					  <label  class="form-label">E-mail:</label>
					  <input class="form-control" placeholder="E-mail" value="<?php  echo $row['Email'];?>" name="email" type="email" required="true">					  
					</div>
					<div class="col-md-6">
						<label  class="form-label">Password:</label>
						<input type="password" class="form-control"  value="<?php  echo $row['Password'];?>" name="password" placeholder="User Id" required="true">					  
					  </div>
					  
					  
					  <hr>
					  <div class="col-md-3 ">
						<i>Verify before sumbitting</i>
						<br>
						
        
						<button type="submit" value="login" name="update" class="btn bg-info mb-3">Update</button>
						
					</div>
				</form>
           
				<?php } ?>	
				
			 	
 

  

         
 
            

              
            </div>

	
</div>	



</body>
</html>
<?php } ?>