<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['register']))
  {
    $fname=$_POST['username'];
    $mobno=$_POST['mobilenumber'];
    $email=$_POST['email'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$userid=$_POST['userid'];
	$location=$_POST['location'];
	$language=$_POST['language'];
    // $password=md5($_POST['password']);

    $ret=mysqli_query($con, "select Email from users where Email='$email' ");
    $result=mysqli_fetch_array($ret);
    if($result>0){
$msg="This email  associated with another account";
    }
    else{

    $query=mysqli_query($con, "INSERT INTO `users`(`id`, `Username`, `Email`, `UserID`, `Phone_no`, `Gender`, `Age`, `Language`, `Location`)
	 VALUES ('null','$fname','$email','$userid','$mobno','$gender','$age','$language','$location')");
    if ($query) {
    $msg1="You have successfully registered";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";

    }
}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CGMS - Signup</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<script type="text/javascript">
 

</script>
<body>
	<div class="container">
			<h2 align="center">Care Giving Management System</h2>
			<hr />
			<div class="col-8">
			<div class="login-panel panel panel-default col-5">
				<div class="panel-heading">Sign Up</div>
				<div class="panel-body">
					<form action="" method="POST">
						<p style="font-size:16px; color:green" align="center"> <?php if($msg1){echo $msg1;}  ?> </p>
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){echo $msg;}  ?> </p>
					<div class="col-md-6">
						<label for="name" class="form-label">User Name:</label>
						<input class="form-control" placeholder="Full Name" name="username" type="text" required="true">
					</div>
					<div class="col-md-6">
					  <label  class="form-label">E-mail:</label>
					  <input class="form-control" placeholder="E-mail" name="email" type="email" required="true">					  
					</div>
					<div class="col-md-6">
						<label  class="form-label">User Id:</label>
						<input type="number" class="form-control" id="userid" name="userid" placeholder="User Id" required="true">					  
					  </div>
					  <div class="col-md-6">
						<label class="form-label">Tel:</label>
						<input type="number" class="form-control" name="mobilenumber"
						 placeholder="Mobile Number" maxlength="10" pattern="[0-9]{10}" required="true">					  
					  </div>
					  <div class="col-md-6">
						<label class="form-label">Gender:</label>
						<input type="text" class="form-control"  name="gender" placeholder="Gender"  required="true">					  
					  </div>
					  <div class="col-md-6">
						<label class="form-label">Age:</label>
						<input type="number" class="form-control"  name="age" placeholder="Age"  required="true">					  
					  </div>
					  <div class="col-md-6">
						<label  class="form-label">Location:</label>
						<input type="text" class="form-control" id="" name="location" placeholder="Location"   required="true">					  
					  </div>
					  <div class="col-md-6">
						<label class="form-label">Language:</label>
						<input type="text" class="form-control" id="userid" name="language" placeholder="Fluent Languages"
						 required="true">					  
					  </div>
					  
					  <hr>
					  <div class="col-md-3 ">
						<i>Verify before sumbitting</i>
						<br>
						
        
						<button type="submit" value="login" name="register" class="btn bg-info mb-3">Register</button>
						<button type="submit" value="login" name="login" class="btn bg-info mb-3">login</button>
						
					</div>
				</form>
				</div>
				
			 	</div>
			</div><!-- /.col-->
	
	
			
		</div><!-- /.row -->	
	</div>
</div>

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
