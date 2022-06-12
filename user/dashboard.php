<?php
include_once '../includes/dbconnection.php';
$result = mysqli_query($con,"SELECT * FROM clients");
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
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main ">
    <div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"> <marquee><h4>Hello... Welcome to CGMS</h4></marquee></div>
<hr>
<div class="panel-body ">
<p>Here is a list of all the tasks that the system allows to perform</p>
<ol>
	<li>View clients</li>
	<li>Apply for Job requests</li>
	<li>Update own Profile</li>

</ol>
<div class="col-12">
							
</div>

	
</div>	



</body>
</html>
