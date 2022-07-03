<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if(count($_POST)>0) {

    mysqli_query($con,"UPDATE jobs set id='" . $_POST['id'] . "', UserName='" . $_POST['username'] . "',
     UserIDNO='" . $_POST['useridnumber'] . "', ClientName='" . $_POST['clientname'] . "' ,ClientID='" . $_POST['clientid'] . "' WHERE id='" . $_POST['id'] . "'");
    header('location:jobs.php');
    }
    $result = mysqli_query($con,"SELECT * FROM jobs WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
    ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CGMS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <?php include_once "../includes/header.php" ?>
<div class="container-fluid">

<div class="row">
<?php include_once "sidebar.php" ?>
<div class="col-10 list-group-item-primary">
<form action="" method="POST" >
<p style="font-size:16px; color:green" align="center"> <?php// if($msg){echo $msg;}  ?> </p>
            <p class="text-center"><i>Applicant Details</i></p>
            <input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
			<label for="name" class="form-label">User Name:</label>
            <input class="form-control" value="<?php echo $row['UserName']; ?>" name="username" type="text" required="true">
          
            <label for="name" class="form-label">User Id:</label>
            <input class="form-control" value="<?php echo $row['UserIDNO']; ?>" name="useridnumber" type="text" required="true">
          
            <p class="text-center"><i>Client Details</i></p>
            <label  class="form-label">Client Id:</label>
            <input class="form-control" value="<?php echo $row['ClientName']; ?>" name="clientid" type="text" required="true" >            
                     
            
            <label  class="form-label">Client name:</label>
            <input type="text" class="form-control" name="clientname" value="<?php echo $row['ClientID']; ?>"  required="true" >           
            
            <label  class="form-label">Validate:</label>
            <input type="text" class="form-control" name="jobstatus" required="true" placeholder="Approve/Decline" >  
			<hr>
			<div class="col-md-3 ">
			<i>Verify before sumbitting</i>
			<br>
			<button type="submit" value="login" name="update" class="btn bg-info mb-3">Update</button>
						
					</div>
				</form>
           
				
				
			 	
 

  

         
 
            

              
            </div>

	
</div>	



</body>
</html>
