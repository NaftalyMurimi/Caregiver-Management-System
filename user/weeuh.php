<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['userid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
$loginid=$_SESSION['userid'];

 $username = $_POST['username'];
 $useridnumber = $_POST['useridnumber'];
 $clientid = $_POST['clientid'];
 $clientname = $_POST['clientname'];  
	
	
 $query=mysqli_query($con, "INSERT INTO `jobs`(`id`, `userid`, `UserName`, `UserIDNO`, `ClientName`, `ClientID`) 
    VALUES ('null','$loginid','$username','$useridnumber','$clientname','$clientid')");
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
    <form method="POST">
          <div class="col-12">
            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
            echo $msg;}  ?> </p>
            <p style="font-size:16px; color:red" align="center"> <?php if($msg1){
            echo $msg1;}  ?> </p>
            <p class="text-center"><i>Applicant details</i></p>
            <label for="name" class="form-label">User Name:</label>
            <input class="form-control" placeholder="User Name"  name="username" type="text" required="true">
          </div>
          <div class="col-12">
            <label for="name" class="form-label">User Id:</label>
            <input class="form-control" placeholder="User Name"  name="useridnumber" type="text" required="true">
          </div>
          <hr>
          <div class="col-12">
            <p class="text-center"><i>Client details</i></p>
            <label  class="form-label">Client Id:</label>
            <input class="form-control" placeholder="Client Id"  name="clientid" type="text" required="true" >            
          </div>
          <div class="col-md-12">
            <label  class="form-label">Client name:</label>
            <input type="text" class="form-control" name="clientname" placeholder="Client Name" required="true" >           
            </div>
						<button type="submit" value="login" name="submit" class="btn bg-info mb-3">Update</button>
						
					</div>
				</form>
           
				<?php } ?>	
				
			 	
 

  

         
 
            

              
            </div>

	
</div>	



</body>
</html>
