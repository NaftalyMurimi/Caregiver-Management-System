<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['userid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['update']))
  {
    $loginid=$_SESSION['userid'];
    $fname=$_POST['username'];
    $mobno=$_POST['mobilenumber'];
    $email=$_POST['email'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$userid=$_POST['userid'];
	$location=$_POST['location'];
	$language=$_POST['language'];
	
     $query=mysqli_query($con, "update users set Username ='$fname', Email='$email', UserID='$userid', UserID='$userid', 
	 Phone_no='$mobno', Gender='$gender', Age='$age' , Language='$language' , Location='$location='  where id='$loginid'");
    if ($query) {
    $msg="User profile has been updated.";
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
    <?php include_once "sidebaruser.php" ?>
    <div class="col-10 list-group-item-primary">
    <form action="" method="POST" >
						<p style="font-size:16px; color:green" align="center"> <?php if($msg){echo $msg;}  ?> </p>
<?php
$userid=$_SESSION['userid'];
$ret=mysqli_query($con,"select * from users where id='$userid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>				
						<div class="col-6">
						<label for="name" class="form-label">User Name:</label>
						<input class="form-control" placeholder="Full Name" value="<?php  echo $row['Username'];?>" name="username" type="text" required="true">
					</div>
					<div class="col-6">
					  <label  class="form-label">E-mail:</label>
					  <input class="form-control" placeholder="E-mail" value="<?php  echo $row['Email'];?>"name="email" type="email" required="true">					  
					</div>
					<div class="col-md-6">
						<label  class="form-label">User Id:</label>
						<input type="text" class="form-control" id="userid" value="<?php  echo $row['UserID'];?>" name="userid" placeholder="User Id" required="true" readonly>					  
					  </div>
					  <div class="col-md-6">
						<label class="form-label">Tel:</label>
						<input type="number" class="form-control" value="<?php  echo $row['Phone_no'];?>" name="mobilenumber"
						 placeholder="Mobile Number" maxlength="10" pattern="[0-9]{10}" required="true">					  
					  </div>
					  <div class="col-md-6">
						<label class="form-label">Gender:</label>
						<input type="text" class="form-control" value="<?php  echo $row['Gender'];?>"  name="gender" placeholder="Gender"  required="true">					  
					  </div>
					  <div class="col-md-6">
						<label class="form-label">Age:</label>
						<input type="number" class="form-control" value="<?php  echo $row['Age'];?>" name="age" placeholder="Age"  required="true">					  
					  </div>
					  <div class="col-md-6">
						<label  class="form-label">Location:</label>
						<input type="text" class="form-control" id="" value="<?php  echo $row['Location'];?>" name="location" placeholder="Location"   required="true">					  
					  </div>
					  <div class="col-md-6">
						<label class="form-label">Language:</label>
						<input type="text" class="form-control"  value="<?php  echo $row['Language'];?>" name="language" placeholder="Fluent Languages"
						 required="true">					  
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