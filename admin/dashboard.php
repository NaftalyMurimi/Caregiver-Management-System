<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit'])//&&$_FILES['userfile']['size']>0
)
  {
 
 $username = $_POST['username'];
 $phone = $_POST['phone'];
 $description = $_POST['description'];
 $age = $_POST['age'];
 $gender = $_POST['gender'];
 $location = $_POST['location'];
          $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
          $image_name= addslashes($_FILES['image']['name']);
          $image_size= getimagesize($_FILES['image']['tmp_name']);
    
          move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/" . $_FILES["image"]["name"]);      
          $upimage="../uploads/" . $_FILES["image"]["name"];
          
          
          $con->query("INSERT INTO `clients`(`id`, `username`, `phone`, `age`, `gender`, `location`, `description`, `picture`)
		   VALUES ('null',' $username',' $phone',' $age','$gender','$location','$description','$upimage')")or die(mysql_error());
        $msg="You have submitted the clients successfully.";
        }
        else { 
         // header('location:../View/View.php');   
       // $msg1="Failed!!!! Try again.";

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
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main list-group-item-primary">
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"> <marquee><h4>Hello... Welcome to CGMS</h4></marquee></div>
<hr>
<div class="panel-body ">
<p>Here is a list of all the tasks that the system allows to perform</p>
<ol>
	<li>Add and manage New clients</li>
	<li>View and activate user accounts</li>
	<li>Update own Profile</li>

</ol>
<div class="col-12">
							
</div>

	
</div>	


</body>
</html>
