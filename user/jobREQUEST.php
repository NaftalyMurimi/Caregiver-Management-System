<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['userid']==0)) {
  header('location:logout.php');
  } else{
    
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
    <div class="modal-body">
    
    <div class="col-md-12">
							
		<div class="table-responsive">
            <table class="table table-bordered  table-hover">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Client Name</th>
                  <th>Client ID</th>
                  <th>Job Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
$userid=$_SESSION['userid'];
$ret=mysqli_query($con,"select * from jobs where UserID='$userid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <tbody>
                <tr>
                  <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['ClientName'];?></td>
                  <td><?php  echo $row['ClientID'];?></td>
				  <td>Waiting..</td>
                  <td><a href="viewAPPOINTMENTS.php?delid=<?php echo $row['id'];?>">Delete/Cancel</a>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
               
              </tbody>
            </table>
          </div>
						</div>      
	
				
			 	
 

  

         
 
            

              
            </div>

         
</div>	



</body>
</html>
